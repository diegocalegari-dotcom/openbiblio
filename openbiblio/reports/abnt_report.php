<?php
require_once("../shared/common.php");
$tab = "reports"; // Define $tab before including logincheck.php
require_once("../shared/logincheck.php");
require_once("../classes/Localize.php");
require_once("../classes/Biblio.php");
require_once("../classes/BiblioQuery.php"); // Added for fetching Biblio by ID

$loc = new Localize(OBIB_LOCALE, "reports");

header('Content-Type: text/plain; charset=utf-8');

echo "Relatório ABNT de Livros\n\n";

// Get bibids from $_POST
$bibidsString = isset($_POST['bibids']) ? $_POST['bibids'] : '';
$bibids = array_filter(explode(',', $bibidsString)); // Split and remove empty values

if (empty($bibids)) {
    echo "Nenhum livro selecionado para o relatório.\n";
    exit();
}

$biblioQ = new BiblioQuery();
$biblioQ->connect_e();
if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    echo "Erro na conexão com o banco de dados: " . $biblioQ->getError();
    exit();
}

foreach ($bibids as $bibid) {
    $biblio = $biblioQ->doQuery($bibid);
    if ($biblio) {
        $biblioFields = $biblio->getBiblioFields();

        // Extract information using MARC tags
        $author = isset($biblioFields['100a']) ? $biblioFields['100a']->getFieldData() : '';
        $title = isset($biblioFields['245a']) ? $biblioFields['245a']->getFieldData() : '';
        $edition = isset($biblioFields['250a']) ? $biblioFields['250a']->getFieldData() : '';
        $place = isset($biblioFields['260a']) ? $biblioFields['260a']->getFieldData() : '';
        $publisher = isset($biblioFields['260b']) ? $biblioFields['260b']->getFieldData() : '';
        $copyrightDate = isset($biblioFields['260c']) ? $biblioFields['260c']->getFieldData() : '';

        // Format according to ABNT
        $abntOutput = "";

        // Author (LASTNAME, Firstname)
        if (!empty($author)) {
            $authorFormatted = $author;
            // Check if the author name already contains a comma (indicating LASTNAME, Firstname format)
            if (strpos($author, ',') !== false) {
                $parts = explode(',', $author, 2); // Split into at most 2 parts
                $lastName = strtoupper(trim($parts[0]));
                $firstName = trim($parts[1]);
                // Convert first name to title case
                $firstName = ucwords(strtolower($firstName));
                $authorFormatted = $lastName . ', ' . $firstName;
            } else {
                // If no comma, assume Firstname Lastname and convert to LASTNAME, Firstname
                $authorParts = explode(' ', $author);
                $lastName = strtoupper(array_pop($authorParts));
                $firstName = implode(' ', $authorParts);
                // Convert first name to title case
                $firstName = ucwords(strtolower($firstName));
                $authorFormatted = $lastName . ', ' . $firstName;
            }
            $abntOutput .= $authorFormatted . '. ';
        }

        // Title
        $title = ucwords(strtolower($title));
        $abntOutput .= $title . '. ';

        // Edition
        if (!empty($edition)) {
            $abntOutput .= $edition . ' ed. ';
        }

        // Place, Publisher, Year
        $publicationDetails = [];
        if (!empty($place)) {
            $publicationDetails[] = $place;
        }
        if (!empty($publisher)) {
            $publicationDetails[] = $publisher;
        }
        if (!empty($copyrightDate)) {
            $publicationDetails[] = $copyrightDate;
        }

        if (!empty($publicationDetails)) {
            $abntOutput .= implode(': ', $publicationDetails) . '.';
        }

        echo $abntOutput . "\n";
    }
}

$biblioQ->close();

?>