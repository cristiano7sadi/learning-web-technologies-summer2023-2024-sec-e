<?php

    include_once('../controller/sessionCheck.php');

?>

<html>
<head>
    <title>Store Locator</title>
</head>
<body>
    <h1><center>Store Locator</center></h1>
    <form method="post" action="../controller/storeLocatorCheck.php">
        <fieldset>
            <legend>Store Locator</legend>
            Select Location :
            <select name="storeLocator" id="storeLocator">
                <option value="mirpur">Mirpur</option>
                <option value="dhanmondi">Dhanmondi</option>
                <option value="Wari">Wari</option>
                <option value="uttara">Uttara</option>
                <option value="bashundhara">Bashundhara</option>
            </select>
            <input type="submit" name="submit" id="submit" value="Search">
        </fieldset>
    </form>

    <a href="userHomePage.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>

</body>
</html>