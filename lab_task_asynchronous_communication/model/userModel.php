<?php

    require_once('db.php');
    function login($emailId, $password)
    {
        $con = getConnection();
        $sql = "select * from persons where email='{$emailId}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function registration($person)
    {
        $name = $person['name'];
        $password = $person['password'];
        $emailId = $person['email'];
        $phone = $person['phone'];
        
        $con = getConnection();
        $sql = "INSERT INTO persons (name, password, email, phone)
        VALUES ('$name', '$password', '$emailId', '$phone')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function checkEmailExists($email)
    {
        $con = getConnection();
    
        $escapedEmail = mysqli_real_escape_string($con, $email);
    
        $sql = "SELECT * FROM persons WHERE email = '$escapedEmail'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

?>