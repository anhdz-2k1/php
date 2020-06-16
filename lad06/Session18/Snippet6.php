<?php


if($connect_mysql)
{
    echo "Connection established<br>";
}
else
{
    die("Unable to connect <br>");
}
$mysql_db = mysqli_select_db($connect_mysql,'publications');
if($mysql_db)
{
    echo "Connected to the database<br>";
}
else
{
    die("Unable to connect to the database <br>");
}
$sql_table = "Create table user_contact("." user_id int not null primary key, "." user_name char(25) not null, "." user_email_id char(25) ".")";
if(mysqli_query($connect_mysql, $sql_table))
{
    echo "Table is create <br>";
}
else
{
    die ("Unable to create the table <br>");
}
?>
