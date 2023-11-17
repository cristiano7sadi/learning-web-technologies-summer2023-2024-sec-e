<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["gender"]) || empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"])) {
        echo "All fields are required.";
    } else {
        $_SESSION["username"] = $_POST["username"];
        echo "Profile updated successfully!";
    }
}
?>
