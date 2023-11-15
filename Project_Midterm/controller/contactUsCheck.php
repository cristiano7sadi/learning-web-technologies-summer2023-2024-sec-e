<?php

    include_once('../controller/sessionCheck.php');
    include_once('../model/contactUsModel.php');

    if (isset($_POST['submit']))
    {
        $selectedLocation = $_POST['storeLocator'];

        searchStore($selectedLocation);
    }
?>

<html>
    <title>Contact Us</title>
</head>
<body>
    <a href="../view/contactUs.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
</body>
</html>