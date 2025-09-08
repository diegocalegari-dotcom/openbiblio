<?php
require_once("../shared/common.php");
require_once("../classes/BiblioQuery.php");
require_once("../classes/BiblioField.php");

// We don't want to see warnings in our JSON response
error_reporting(E_ERROR | E_PARSE);
header('Content-Type: application/json');

// Determine search type
if (isset($_POST['isbn']) && !empty($_POST['isbn'])) {
    $search_query = 'isbn:' . urlencode($_POST['isbn']);
} elseif (isset($_POST['title']) && !empty($_POST['title'])) {
    $search_query = 'intitle:' . urlencode($_POST['title']);
    if (isset($_POST['author']) && !empty($_POST['author'])) {
        $search_query .= '+inauthor:' . urlencode($_POST['author']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No search criteria provided.']);
    exit();
}

// Query Google Books API
$google_api_url = "https://www.googleapis.com/books/v1/volumes?q=" . $search_query;
$json_response = @file_get_contents($google_api_url);

if ($json_response === false) {
    echo json_encode(['success' => false, 'message' => 'Failed to connect to Google Books API.']);
    exit();
}

$data = json_decode($json_response, true);

if (!$data || $data['totalItems'] == 0 || !isset($data['items'][0]['volumeInfo']['imageLinks']['thumbnail'])) {
    echo json_encode(['success' => false, 'message' => 'No cover image found for the given criteria.']);
    exit();
}

$image_url = $data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];
$image_url = str_replace('http://', 'https://', $image_url);

// Download the image
$image_data = @file_get_contents($image_url);
if ($image_data === false) {
    echo json_encode(['success' => false, 'message' => 'Failed to download cover image from Google.']);
    exit();
}

$pictures_dir = '../pictures/';
$is_temp = false;

// If we have a bibid, we are editing an existing record.
if (isset($_POST['bibid']) && !empty($_POST['bibid'])) {
    $bibid = trim($_POST['bibid']);
    if (!is_numeric($bibid)) {
        echo json_encode(['success' => false, 'message' => 'Invalid BibID.']);
        exit();
    }
    $filename = $bibid . '.jpg';
} else {
    // No bibid, so we are creating a new record. Use a temporary filename.
    $isbn_for_file = isset($_POST['isbn']) ? $_POST['isbn'] : 'title';
    $filename = 'tmp_' . preg_replace('/[^0-9a-zA-Z-]/_i', '', $isbn_for_file) . '.jpg';
    $is_temp = true;
}

// Save the image locally
$filepath = $pictures_dir . $filename;
if (file_put_contents($filepath, $image_data) === false) {
    echo json_encode(['success' => false, 'message' => 'Failed to save image to the pictures directory. Check permissions.']);
    exit();
}

// If we are editing an existing record, update the database now.
if (!$is_temp) {
    $biblioQ = new BiblioQuery();
    $biblioQ->connect_e();
    if ($biblioQ->errorOccurred()) {
        $biblioQ->close();
        echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
        exit();
    }

    $biblio = $biblioQ->doQuery($bibid);
    if (!$biblio) {
        $biblioQ->close();
        echo json_encode(['success' => false, 'message' => 'Could not retrieve bibliography record.']);
        exit();
    }

    $biblioFlds = $biblio->getBiblioFields();

    if (isset($biblioFlds["902a"])) {
        $oldPic = $biblioFlds["902a"]->getFieldData();
        if ($oldPic && $oldPic != $filename && file_exists($pictures_dir . $oldPic)) {
            @unlink($pictures_dir . $oldPic);
        }
        $biblioFlds["902a"]->setFieldData($filename);
    } else {
        $biblioFld = new BiblioField();
        $biblioFld->setBibid($bibid);
        $biblioFld->setTag("902");
        $biblioFld->setSubfieldCd("a");
        $biblioFld->setFieldData($filename);
        $biblio->addBiblioField("902a", $biblioFld);
    }

    if (!$biblioQ->update($biblio)) {
        $biblioQ->close();
        echo json_encode(['success' => false, 'message' => 'Failed to update bibliography record.']);
        exit();
    }
    $biblioQ->close();
}

echo json_encode(['success' => true, 'filename' => $filename, 'is_temp' => $is_temp]);
?>