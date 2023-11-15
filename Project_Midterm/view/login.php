<?php
    
    //include_once('../controller/sessionCheck.php');
    //session_start();

?>
<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controller/loginCheck.php">
            <fieldset>
                <legend>Login</legend>
                Username:   <input type="text" name="username" value="" /> <br>
                Password:   <input type="password" name="password" value="" /> <br> <hr>
                            <input type="submit" name="submit" value="Submit" /> 
                            <a href="signup.php">Signup</a> <br> <br> <hr>
                If you are an Admin, <a href="adminlogin.php">Login here</a>.
            </fieldset>  
        </form>
</body>
</html>