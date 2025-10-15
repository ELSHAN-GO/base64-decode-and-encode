<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = isset($_POST["text"]) ? trim($_POST["text"]) : "";
    $base64 = isset($_POST["base64"]) ? trim($_POST["base64"]) : "";

    if (!empty($text)) {
        echo base64_encode($text);
    } elseif (!empty($base64)) {
        $decoded = base64_decode($base64, true);
        echo ($decoded !== false) ? $decoded : "Invalid Base64 input.";
    } else {
        echo "No input provided.";
    }
}
?>
