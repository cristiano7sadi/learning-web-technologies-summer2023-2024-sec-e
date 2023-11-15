<?php

require_once('db.php');

    function updateDelivery($trackingKey, $estimatedDeliveryTime, $deliveryStatus)
    {
        $con = getConnection();

        $query = "SELECT * FROM orders WHERE tracking_key = '$trackingKey'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE orders SET estimated_delivery_at = '$estimatedDeliveryTime', 
                        delivery_status = '$deliveryStatus' WHERE tracking_key = '$trackingKey'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult) {
            return false;
        }

        return true;
    }

?>
