<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    ADMIN HOME PAGE |
    <a href="../controller/logout.php"> logout </a>

    <br>
    <br>
    
    <a href="admin_update_delivery.php">Update Delivery Tracking</a>
    <hr>
    <a href="admin_update_store_location.php">Update Store Location</a>
    <hr>
    <a href="add_user.php">Add User</a>
    <hr>
    
</body>
</html>