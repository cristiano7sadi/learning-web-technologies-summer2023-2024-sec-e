<?php

    // include_once('../controller/sessionCheck.php');
    // include_once('../model/storeLocatorModel.php');

    // if (isset($_POST['submit']))
    // {
    //     $selectedLocation = $_POST['storeLocator'];

    //     searchStore($selectedLocation);
    // }

    include_once('../controller/sessionCheck.php');
    include_once('../model/operationModel.php');

    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        searchUser($username);
    }

?>

<html>
    <title>Store Locator</title>
</head>
<body>
    <a href="../view/storeLocator.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
