<?php
    include_once('../controller/sessionCheck.php');
    //session_start();
?>

<html>
<head>
    <title>Add Employee</title>
    <script src="../javascript/addUserCheck.js"></script>
</head>
<body>

    <a href="adminHomePage.php"> Back </a> |
    <a href="../controller/logout.php"> logout </a>

    <form method="post" action="../controller/addUserCheck.php" onsubmit="return validateForm()">
        <h2><center>Employee Registration</center></h2>
        <fieldset>
            <legend><b>Add New Employee</b></legend>
            Full Name : <input type="text" id="fullName" name="fullName" value=""> <br><br>
            Username :  <input type="text" id="username" name="username" value=""> <br><br>
            Email :     <input type="email" id="email" name="email" value=""> <br><br>
            Password :  <input type="password" id="password" name="password" value=""> <br><br>
            Confirm Password : <input type="password" id="confirmPassword" name="confirmPassword" value=""> <br><br>

            Contact No. : <input type="text" id="contactNo" name="contactNo" value=""> <br><br>

            <input type="submit" name="submit" value="Add">
            <input type="reset" name="reset" value="Reset"> <br><br>
        </fieldset>
    </form>
</body>
</html>