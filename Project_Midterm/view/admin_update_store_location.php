<?php

    include_once('../controller/sessionCheck.php');

?>

<html>
<head>
    <title>Update Store Location</title>
</head>
<body>
    <h1><center>Update Store Location</center></h1>
    <form method="post" action="../controller/admin_update_store_locationCheck.php">
        <fieldset>
            <legend>Update Store Location</legend>
            Select Location :
            <select name="storeLocator" id="storeLocator">
                <option value="mirpur">Mirpur</option>
                <option value="dhanmondi">Dhanmondi</option>
                <option value="Wari">Wari</option>
                <option value="uttara">Uttara</option>
                <option value="bashundhara">Bashundhara</option>
            </select>
            <br>
            Road No. : <input type="text" name="road_no" id="road_no"> <br>
            House No. : <input type="text" name="house_no" id="house_no"> <br>
            Contact No. : <input type="text" name="contact_no" id="contact_no"> <br>

            <input type="submit" name="submit" id="submit" value="Update">
        </fieldset>
    </form>

    <a href="adminHomePage.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>

</body>
</html>