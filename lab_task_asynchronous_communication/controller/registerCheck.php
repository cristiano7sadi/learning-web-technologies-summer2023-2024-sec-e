<?php

    require_once('../model/userModel.php');
    session_start();

    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $emailId = $_REQUEST['emailId'];
    $phone = $_REQUEST['phone'];

    if (strlen($password) < 4) {
        echo "<h1>Password must be at least 4 characters long!</h1>";
        exit(); 
    }

    if ($password !== $confirmPassword) {
        echo "<h1>Password and Confirm Password do not match!</h1>";
        exit(); 
    }

    if ($name == "" || $password == "" || $emailId == "" || $phone == "") {
        echo "<h1>Null username or password or email or contact number!</h1>";
        exit(); 
    }

    $person = ['name' => $name, 'password' => $password, 'emailId' => $emailId, 'phone' => $phone];
    $status = registration($person);

    if ($status) {
        echo "You have signed up successfully";
        $_SESSION['flag'] = 'true';
    } else {
        echo "Invalid user!";
    }
?>

<html>
<body>
    <hr>
    <br>
    <h2> Click here to<a href="../view/login.php"> login </a> </h2>
</body>
</html>