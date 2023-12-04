<?php
    require_once('../model/userModel.php');

    session_start();

    $emailId = $_REQUEST['emailId'];
    $password = $_REQUEST['password'];

    if($emailId == "" || $password == "" )
    {
        echo "null username or password!";
    }
    else
    {
        $status = login($emailId, $password);
        
        if ($status)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/home.php');
        }
        else
        {
            echo "invalid user!";
        }
    }
?>