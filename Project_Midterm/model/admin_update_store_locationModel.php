<?php

require_once('db.php');

    function updateStoreLocation($selectedLocation, $road_no, $house_no, $contact_no)
    {
        $con = getConnection();

        $query = "SELECT * FROM storeLocation WHERE area = '$selectedLocation'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE storeLocation SET road_no = '$road_no', 
                        house_no = '$house_no', contact_no = '$contact_no' WHERE area = '$selectedLocation'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult)
        {
            return false;
        }

        return true;
    }

?>
