<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Registration</title>
    <script src="../javascript/signupCheck.js"></script>
</head>
<body>
    <form method="post" action="../controller/signupCheck.php" onsubmit="return validateForm();">
        <fieldset>
            <legend>Registration</legend>
            Full Name : <input type="text" id="fullName" name="fullName" value=""> <br><br>
            Username :  <input type="text" id="username" name="username" value=""> <br><br>
            Email :     <input type="email" id="email" name="email" value=""> <br><br>
            Password :  <input type="password" id="password" name="password" value=""> <br><br>
            Confirm Password : <input type="password" id="confirmPassword" name="confirmPassword" value=""> <br><br>
    
            Contact No. : <input type="text" id="contactNo" name="contactNo" value=""> <br><br>

            <input type="submit" name="submit" value="Sign Up">
            <input type="reset" name="reset" value="Reset"> <br><br>

            Already have an acccount? <a href="login.php">Login here.</a>
        </fieldset>
    </form>
</body>
</html>