<?php
    
    //include_once('../controller/sessionCheck.php');
    //session_start();

    if(isset($_POST['emailCheck'])) {
        $email = $_POST['emailCheck'];
        $emailExists = checkEmailExists($email);
        
        if($emailExists)
        {
            echo "Email address already exists!";
        } else
        {
            echo "Email address is available!";
        }
        exit();
    }

?>
<html>
<head>
    <title>Login</title>
    <script src="../javascript/loginCheck.js"></script>
</head>
<body>
        <form method="post" action="../controller/loginCheck.php" onsubmit="return validateLogin();">
            <fieldset>
                <legend>Login</legend>
                Email ID:   <input type="text" id="emailId" name="emailId" value="" /> <br>
                <span id="emailAvailability"></span> <br>
                Password:   <input type="password" id="password" name="password" value="" /> <br> <hr>
                            <input type="submit" id="submit" name="submit" value="Login" /> 
                            <a href="register.php">Register</a> <br> <br> <hr>
            </fieldset>  
        </form>
</body>
</html>