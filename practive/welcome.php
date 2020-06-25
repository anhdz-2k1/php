<?php
session_start();
if (isset($_SESSION['fullname']) && isset($_SESSION['username']))
{
    $fullname = htmlspecialchars($_SESSION['fullname']);
    $username = htmlspecialchars($_SESSION['username']);
    echo "Welcome to Desiplay " . "$fullname" . "with username is " . "$username";
}

?>
