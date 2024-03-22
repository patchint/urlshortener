<?php
include 'db.php';

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $stmt = $db->prepare("SELECT original_url FROM urls WHERE short_code = ?");
    $stmt->execute([$code]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $originalUrl = $row['original_url'];
        header("Location: $originalUrl");
        exit();
    } else {
        echo "URL not found.";
    }
} else {
    echo "Invalid request.";
}
?>
