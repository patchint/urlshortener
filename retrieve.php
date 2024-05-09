<?php
include 'db.php';

if (isset($_POST['code'])) {
    $code = $_POST['code'];

    $stmt = $db->prepare("SELECT original_url FROM urls WHERE short_code = ?");
    $stmt->execute([$code]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && isset($row['original_url'])) {
        $originalUrl = $row['original_url'];
        echo "URL : <a href=\"$originalUrl\" target=\"_blank\">$originalUrl</a>";
    } else {
        echo "URL introuvable ou code invalide";
    }
} else {
    echo "Requête invalide";
}
?>

