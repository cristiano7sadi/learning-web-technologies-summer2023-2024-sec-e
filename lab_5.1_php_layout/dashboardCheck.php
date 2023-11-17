<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

echo "Welcome to the dashboard, " . $_SESSION["username"] . "!";
?>
