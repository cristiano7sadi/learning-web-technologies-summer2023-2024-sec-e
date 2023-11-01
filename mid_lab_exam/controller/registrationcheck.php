<?php 
    session_start();
    $userID = $_REQUEST['userID'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $name = $_REQUEST['name'];
    $userType = $_REQUEST['userType'];

    if($username == "" || $password == "" || $confirmPassword == "" || $name == ""|| $userType == ""){
        echo "null username or password or name or user type!";
    }else{
        $user = ['ID'=> $userID, 'Password'=> $password, 'Confirm_Password' => $confirmPassword, 'Name'=> $name, 'User_Type'=> $userType];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>