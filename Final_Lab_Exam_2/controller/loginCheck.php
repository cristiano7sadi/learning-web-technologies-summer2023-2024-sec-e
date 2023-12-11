<?php
session_start();
require_once('../model/UserModel.php');


$results = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    

    
    $results = GetRole($username);
    $_SESSION['role'] = $results[0]['role'];

    if ($results[0]['role'] == "Buyer") {
        header('location: ../view/Buyer_home.php');
       
    } else if ($results[0]['role'] == "seller") {
        header('location: ../view/seller_home.php');
       
    }
}
else{
    echo "Incorrect username or password.<br>";
    
}




?>