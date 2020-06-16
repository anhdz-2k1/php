<?php
$connect_mysql = mysqli_connect("127.0.0.1","root","","publications");
$result = mysqli_query($connect_mysql, "Select * from customer");
while($row = mysqli_fetch_row($result))
{
    printf("%s (%s)\n", $row[0], $row[1]);
}
?>
