<?php
require_once('db.php');

function InsertUser($username,$name,$password,$email,$role){

    $con = getConnection();
    $sql = "INSERT INTO user (username,name,password,email,role)VALUES ('$username','$name','$password','$email','$role')";
    
    $result = mysqli_query($con, $sql);
    return;
  

}


function GetRole($username){
    $con = getConnection();
    $sql = "select role from user where username='$username'";
    
    $result = mysqli_query($con, $sql);
    
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

}

?>