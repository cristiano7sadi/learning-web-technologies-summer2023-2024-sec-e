<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        echo "Email is required.";
    } else {
        echo "Password reset instructions sent to the email.";
    }
}
?>
