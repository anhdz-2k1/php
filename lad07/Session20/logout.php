<?php
$logcookie = $_COOKIE['logname'];

setcookie("logcookie");

Header("Location: information.html");
?>
