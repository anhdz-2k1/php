<?php
$connect_mysql = mysqli_connect("127.0.0.1","root","","publications");
$result = mysqli_query($connect_mysql, "select * from classics");
$rows = $result->num_rows;
echo "The table comtains $rows rows.<br>";
mysqli_close($connect_mysql);
echo "The connection to the database has been closed.";
?>
