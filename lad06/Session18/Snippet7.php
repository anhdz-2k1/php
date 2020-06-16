<?php
$sever = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect("127.0.0.1","root","","publications");
if($connect_mysql)
{
    echo "Connection established";
}
else
{
    die ("Unable to connect");
}
$db = "publications";
$mysql_db = mysqli_select_db($connect_mysql, $db);
if($mysql_db)
{
    echo "<br> <br> Connected to the database";
}
else
{
    die("Unable to connect to the database");
}
$sql_insert = "Insert into user_contact(user_id,user_name,user_email_id) values (101, 'John','john@gmail.com')";
$result = mysqli_query($connect_mysql,$sql_insert);
if ($result)
{
    echo "<br><br> The reconds have been added to the table";

}
else
{
    echo "Unable to insert recoeds.";
    mysqli_error();
}

?>

