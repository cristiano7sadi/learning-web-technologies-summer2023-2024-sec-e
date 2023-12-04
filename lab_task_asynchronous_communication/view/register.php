<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Registration</title>
    <script src="../javascript/registerCheck.js"></script>
</head>
<body>
    <form method="post" action="../controller/registerCheck.php" onsubmit="return validateForm();">
        <fieldset>
            <legend>Registration</legend>
            Name : <input type="text" id="name" name="name" value=""> <br><br>
            Phone :  <input type="text" id="phone" name="phone" value=""> <br><br>
            Email ID:     <input type="email" id="emailId" name="emailId" value=""> <br><br>
            Password :  <input type="password" id="password" name="password" value=""> <br><br>
            Confirm Password : <input type="password" id="confirmPassword" name="confirmPassword" value=""> <br><br>
    
            <input type="submit" id="submit" name="submit" value="Register">
            <input type="reset" id="reset" name="reset" value="Reset"> <br><br>

            Already have an acccount? <a href="login.php">Login here.</a>
        </fieldset>
    </form>
</body>
</html>