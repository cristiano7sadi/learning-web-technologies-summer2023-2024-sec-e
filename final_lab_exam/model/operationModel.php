<?php

    require_once('db.php');

    function searchUser($username)
    {
        $con = getConnection();

        $username = mysqli_real_escape_string($con, $username);

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Full Name: " . $row['full_name'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
        }
    }
?>
