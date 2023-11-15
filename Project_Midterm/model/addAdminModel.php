<?php

    require_once('db.php');

    function addAdmin($user)
    {
        $username = $user['username'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO adminInfo (username, password, email, full_name, contact_no)
        VALUES ('$username', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>