<?php
require_once('db.php');

function InsertProduct($name,$price,$quantity){

    $con = getConnection();
    $sql = "INSERT INTO product (name,price,quantity)VALUES ('$name','$price','$quantity')";
    
    $result = mysqli_query($con, $sql);
    return;
  

}

function ViewProducts(){
    $con = getConnection();
    $sql = "select * from product";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;
}

?>