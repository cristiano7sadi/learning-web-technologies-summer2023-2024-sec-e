<?php
session_start();

session_unset();

session_destroy();

header("Location: publicHome.html");
exit();
?>
