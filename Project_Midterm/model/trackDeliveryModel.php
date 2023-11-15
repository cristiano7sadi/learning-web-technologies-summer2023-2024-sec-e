<?php

    require_once('db.php');

    function trackDelivery($tracking_key)
    {
        $con = getConnection();
        $sql = "SELECT estimated_delivery_at, delivery_status FROM orders WHERE tracking_key = '$tracking_key'";
        $result = mysqli_query($con, $sql);
        $order = mysqli_fetch_assoc($result);

        if (count($order) > 0)
        {
            $estimated_delivery_time = $order['estimated_delivery_at'];
            $delivery_status = $order['delivery_status'];

            echo "Estimated Delivery Time: $estimated_delivery_time<br>";
            echo "Delivery Status: $delivery_status<br>";
        }
        else
        {
            echo "Order not found. Please check your tracking key.";
        }
    }

?>