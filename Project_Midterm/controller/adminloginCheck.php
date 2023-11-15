<?php
    require_once('../model/adminloginModel.php');

    session_start();

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" )
    {
        echo "null username or password!";
    }
    else
    {
        $status = login($username, $password);
        
        if ($status)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/adminHomePage.php');
        }
        else
        {
            echo "invalid user!";
        }
    }
?>