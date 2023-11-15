<?php

require_once('../model/userProfileModel.php');
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $userProfile = getUserProfile($username);

    if ($userProfile) {
        echo "Full Name: " . $userProfile['full_name'] . "<br>";
        echo "Username: " . $userProfile['username'] . "<br>";
        // Exclude displaying the password for security reasons
        echo "Email: " . $userProfile['email'] . "<br>";
        echo "Contact No: " . $userProfile['contact_no'] . "<br>";
    } else {
        echo "User not found.";
    }
} else {
    echo "Session not set. User not logged in.";
}
?>
