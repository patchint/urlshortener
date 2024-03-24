<?php
include 'db.php';

if (isset($_POST['url'])) {
    $url = $_POST['url'];

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        if (!isUnsafeUrl($url)) {
            $shortCode = generateShortCode();
            $stmt = $db->prepare("INSERT INTO urls (original_url, short_code) VALUES (?, ?)");
            $stmt->execute([$url, $shortCode]);

            $shortenedUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $shortCode;
            echo "<a href='$shortenedUrl' target='_blank'>$shortenedUrl</a>";
        } else {
            echo "URL contains a potential install script or unsafe content.";
        }
    } else {
        echo "Invalid URL format.";
    }
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

function isUnsafeUrl($url) {
    $unsafePatterns = array(
        '/<\s*script\s*>.*<\/\s*script\s*>/i',
        '/<\s*iframe\s*>.*<\/\s*iframe\s*>/i',
        '/<\s*link\s*>.*<\/\s*link\s*>/i',
        '/<\s*style\s*>.*<\/\s*style\s*>/i',
        '/<\s*a\s*href\s*=\s*"\s*[^>]*>/i', 
        '/https?:\/\/.*?\|.*?(?:sh|bash|curl|wget|ftp|python|perl|ruby|php|powershell|apt-get|yum|apt|dnf)/i' 
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        foreach ($unsafePatterns as $pattern) {
            if (preg_match($pattern, $response)) {
                return true;
            }
        }
    }

    return false;
}
?>


