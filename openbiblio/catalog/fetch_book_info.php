<?php
header('Content-Type: application/json');

$isbn = filter_input(INPUT_GET, 'isbn', FILTER_SANITIZE_STRING);

if (!$isbn) {
    echo json_encode(['error' => 'ISBN não fornecido.']);
    exit;
}

$apiUrl = "https://www.googleapis.com/books/v1/volumes?q=isbn:" . urlencode($isbn);

// Use cURL para fazer a requisição
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desativar verificação SSL se houver problemas no XAMPP
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode != 200) {
    echo json_encode(['error' => 'Falha ao contatar a API do Google Books.']);
    exit;
}

$data = json_decode($response, true);

if (empty($data['items'])) {
    echo json_encode(['error' => 'Nenhum livro encontrado para este ISBN.']);
    exit;
}

$bookInfo = $data['items'][0]['volumeInfo'];

$authors = '';
if (isset($bookInfo['authors'])) {
    $authorNames = $bookInfo['authors'];
    if (count($authorNames) == 1) {
        $parts = explode(' ', $authorNames[0]);
        $lastName = array_pop($parts);
        $firstName = implode(' ', $parts);
        $authors = strtoupper($lastName) . ', ' . ucwords(strtolower($firstName));
    } else {
        $authors = implode('; ', $authorNames);
    }
}

$result = [
    'title' => isset($bookInfo['title']) ? strtoupper($bookInfo['title']) : '',
    'author' => $authors,
    'publisher' => $bookInfo['publisher'] ?? '',
    'publicationYear' => $bookInfo['publishedDate'] ?? '',
    'description' => $bookInfo['description'] ?? '',
    'pageCount' => $bookInfo['pageCount'] ?? '',
    'categories' => implode('; ', $bookInfo['categories'] ?? []), // Converte array para string
    'maturityRating' => $bookInfo['maturityRating'] ?? '',
    'coverUrl' => $bookInfo['imageLinks']['thumbnail'] ?? ''
];

echo json_encode($result);
