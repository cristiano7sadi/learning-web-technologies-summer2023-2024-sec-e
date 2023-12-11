
<?php
require_once('../model/ProductModel.php');

header('Content-Type: application/json'); 



$name =  $_POST['name'] ;
$price = $_POST['price'] ;
$quantity=$_POST['qnt'];




if ($name == "") {
    echo json_encode(['status' => 1, 'message' => "name cannot be empty."]);
}

 elseif ($price == "") {
    echo json_encode(['status' => 2, 'message' => "price cannot be empty."]);
}

 elseif ($quantity == "") {
    echo json_encode(['status' => 3, 'message' => "Please provide amount."]);
}


 





else {
    
    InsertProduct($name, $price, $quantity);

    
    echo json_encode(['status' => 10, 'message' => "Product Added"]);
}
?>
