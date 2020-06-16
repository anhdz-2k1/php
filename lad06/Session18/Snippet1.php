<?php
$connect_mysql = mysqli_connect('127.0.0.1','root','','publications');
$mysqli_db = mysqli_select_db($connect_mysql, "publications");
if(!$mysqli_db)
{
    die("Connection failed");
}
else
{
    echo "Current Database iss selected";
}

?>
