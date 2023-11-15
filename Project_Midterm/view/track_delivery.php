<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>


<html>
<head>
    <title>Delivery Tracking</title>
</head>
<body>
    <h1>Delivery Tracking</h1>
    <form action="../controller/track_deliveryCheck.php" method="post">
        <label for="tracking_key">Enter Tracking Key:</label>
        <input type="text" name="tracking_key" id="tracking_key" required>
        <input type="submit" name="submit" value="Track Delivery">
    </form>

    <br>
    <br>

    <a href="userHomePage.php">back</a> |
    <a href="../controller/logout.php"> logout </a>

</body>
</html>