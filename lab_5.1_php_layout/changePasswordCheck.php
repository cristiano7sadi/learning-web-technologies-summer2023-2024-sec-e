<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["password"]) || empty($_POST["newPassword"]) || empty($_POST["retypeNewPassword"])) {
        echo "All password fields are required.";
    } else {
        echo "Password changed successfully!";
    }
}
?>
