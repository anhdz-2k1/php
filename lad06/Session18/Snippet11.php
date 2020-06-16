<html>
<body>
<?php
$sever = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever, $username, $password, "publications");
if($connect_mysql)
    echo "Connection established<br>";
$mysql_db = mysqli_select_db($connect_mysql, "publications");

if ($mysql_db)
    echo "<br><br>Connected to the database <br><br>";

echo "<table border bgcolor='white'>";
echo "<tr><th>User_id</th><th>User_name</th><th>User_email_id</th>";
echo "<dbquery q> select * from user_contact";
echo "<dbrow><tr><td><? q.user_id</td><td><? q.user_name></td><td><? q.user_email_id></td></tr>";
echo "</dbquery>";
echo "</tr>";
echo "</table>"
?>
</body>
</html>
