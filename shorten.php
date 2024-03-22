<?php
include 'db.php';

if (isset($_POST['url'])) {
    $url = $_POST['url'];

    $shortCode = generateShortCode();
    $stmt = $db->prepare("INSERT INTO urls (original_url, short_code) VALUES (?, ?)");
    $stmt->execute([$url, $shortCode]);

    $shortenedUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $shortCode;
    echo "Shortened URL: <a href='$shortenedUrl'>$shortenedUrl</a>";
}

function generateShortCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

