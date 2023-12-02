<?php
    
    //include_once('../controller/sessionCheck.php');
    //session_start();

?>

<html>
<head>
    <title>Search Employee</title>
</head>
<body>
        <form method="post" action="../controller/loginCheck.php">
            <fieldset>
                <legend>Search</legend>
                Employee Name:   <input type="text" name="username" value="" />
                <input type="submit" name="submit" value="Search" /> 
            </fieldset>  
        </form>
</body>
</html>