<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    
    <?php
        include_once('../controller/userProfileCheck.php');
    ?>

    <br>
    <br>

    <a href="userHomePage.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
