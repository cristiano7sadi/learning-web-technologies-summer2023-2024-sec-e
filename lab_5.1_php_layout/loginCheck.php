<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both username and password are required.";
    }
    else
    {
        if ($_POST["username"] == "Bob" && $_POST["password"] == "password") {
            $_SESSION["username"] = $_POST["username"];
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>
