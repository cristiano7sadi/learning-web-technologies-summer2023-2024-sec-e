<?php

    include_once('../controller/sessionCheck.php');

?>

<html>
<head>
    <title>Search Employee</title>
    <script src="../javascript/searchUser.js"></script>
</head>
<body>
        <form method="post" action="../controller/searchEmployeeCheck.php">
            <fieldset>
                <legend>Search</legend>
                Employee's Username:   <input type="text" id="username" name="username" value="" />
                <!-- <input type="submit" name="submit" value="Search" /> -->
                <input type="button" onclick="searchUser()" value="Search">
            </fieldset>  
        </form>

        <div id="storeResult"></div>
</body>
</html>