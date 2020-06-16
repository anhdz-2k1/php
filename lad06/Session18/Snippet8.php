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
if($mysql_db)
{
    echo "Connected to the database <br>";
}
else
{
    die ("Unable to connect to the database <br>");
}
$sql_disp = ("Select * from user_contact;");
echo "<br> Displaying Records from the user_contact table: <br>";
$result = mysqli_query($connect_mysql, $sql_disp);
while ($row = mysqli_fetch_array($result) )
{
    echo "$row[user_id]";
    echo "$row[user_name]";
    echo "$row[user_email_id]<br>";
}

