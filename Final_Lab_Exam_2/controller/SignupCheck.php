
<?php
require_once('../model/UserModel.php');

header('Content-Type: application/json'); 


$username =  $_POST['username'] ;
$name =  $_POST['name'] ;
$password = $_POST['password'] ;
// $ConfirmPassword = isset($_POST['ConfirmPassword']) ? $_POST['ConfirmPassword'] : "";
$email =  $_POST['email'] ;
$role =  $_POST['role'] ;


if ($username == "") {
    echo json_encode(['status' => 1, 'message' => "Username cannot be empty."]);
}

 elseif ($name == "") {
    echo json_encode(['status' => 2, 'message' => "Name cannot be empty."]);
}

 elseif ($password == "") {
    echo json_encode(['status' => 3, 'message' => "Password cannot be empty."]);
}

 elseif ($email == "") {
    echo json_encode(['status' => 4, 'message' => "Email cannot be empty."]);
}

 elseif ($role == "") {
    echo json_encode(['status' => 5, 'message' => "Role cannot be empty."]);
}
 





else {
    
    InsertUser($username, $name, $password, $email, $role);

    
    echo json_encode(['status' => 10, 'message' => "Signup Completed."]);
}
?>
