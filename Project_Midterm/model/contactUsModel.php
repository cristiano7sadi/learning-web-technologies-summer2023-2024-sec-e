<?php

    require_once('db.php');

    function searchStore($location)
    {
        $con = getConnection();

        $location = mysqli_real_escape_string($con, $location);

        $sql = "SELECT * FROM storeLocation WHERE area = '$location'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Location: " . $row['area'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
            echo "Email : " . $row['email'] . "<br>";
        }
    }
?>
