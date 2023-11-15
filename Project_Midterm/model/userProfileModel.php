<?php

require_once('db.php');

function getUserProfile($username)
{
    $con = getConnection();

    $sql = "SELECT * FROM users WHERE username = '{username}'";
    
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    
    if (!$stmt) {
        die("Error in statement preparation: " . mysqli_error($con));
    }

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if (!$result || mysqli_num_rows($result) == 0) {
        return false;
    }

    $userProfile = mysqli_fetch_assoc($result);

    return $userProfile;
}
?>
