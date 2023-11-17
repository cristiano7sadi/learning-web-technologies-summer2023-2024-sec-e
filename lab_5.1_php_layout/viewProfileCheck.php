<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

echo "Viewing profile of " . $_SESSION["username"];
?>
