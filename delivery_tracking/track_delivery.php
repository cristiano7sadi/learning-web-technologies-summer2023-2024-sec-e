<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tracking_key = $_POST['tracking_key'];

$sql = "SELECT estimated_delivery_time, delivery_status FROM orders WHERE tracking_key = '$tracking_key'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $estimated_delivery_time = $row['estimated_delivery_time'];
    $delivery_status = $row['delivery_status'];

    echo "Estimated Delivery Time: $estimated_delivery_time<br>";
    echo "Delivery Status: $delivery_status<br>";
} else {
    echo "Order not found. Please check your tracking key.";
}

$conn->close();
?>
