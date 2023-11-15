<?php

    require_once('../model/trackDeliveryModel.php');

    session_start();

    $tracking_key = $_REQUEST['tracking_key'];

    trackDelivery($tracking_key);

?>