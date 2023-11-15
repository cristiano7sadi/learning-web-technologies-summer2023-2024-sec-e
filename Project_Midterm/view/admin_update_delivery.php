<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Update Delivery Tracking</title>
</head>
<body>
    <h1>Update Delivery Tracking</h1>
    <form action="../controller/admin_update_deliveryCheck.php" method="post">
        <label for="tracking_key">Enter Tracking Key:</label>
        <input type="text" name="tracking_key" id="tracking_key" required> <br> <hr>
        
        <label for="EDT">Estimated Delivery Time:</label>
        <input type="time" id="EDT" name="EDT"> <br> <hr>

        <label for="delivery_status">Delivery Status:</label>
            <select name="delivery_status" id="delivery_status">
                <option value="pending">Pending</option>
                <option value="out_for_delivery">Out for delivery</option>
                <option value="delivered">Delivered</option>
            </select> <br> <hr>


        <input type="submit" name="submit" value="Update Delivery">
    </form>

    <br>
    <br>

    <a href="../view/adminHomePage.php"> Back </a> |
    <a href="../controller/logout.php"> logout </a>

</body>
</html>