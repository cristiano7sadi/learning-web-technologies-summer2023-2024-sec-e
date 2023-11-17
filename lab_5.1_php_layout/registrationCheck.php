<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmPassword"]) || empty($_POST["gender"]) || empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"]))
    {
        echo "All fields are required.";
    }
    else
    {
        $_SESSION["username"] = $_POST["username"];
        echo "Registration successful!";
    }
}
?>
