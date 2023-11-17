<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        echo "Profile picture updated successfully!";
    } else {
        echo "Error uploading file.";
    }
}
?>
