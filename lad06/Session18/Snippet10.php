<?php
$sever = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect("127.0.0.1","root","","publications");
if($connect_mysql)
{
    echo "Connection established<br>";
}
else
{
    die("Unable to connect <br>");
}
$mysql_db = mysqli_select_db($connect_mysql, "publications");
if ($mysql_db)
{
    echo "Connected to the database <br>";
}
else
{
    die ("Unable to connect to the database <br>");
}
$sql_update = ("update user_contact set user_name = 'David' where user_id='102'");
$result = mysqli_query($connect_mysql, $sql_update);
if($result)
{
    echo "Records update: $result <br>";
}
else
{
    echo "Unable to update records <br>";
    printf("Error massage: %s\n", mysqli_error($connect_mysql));
}
?>
