<?php
$dbname = 'publications';
if (!mysqli_connect('127.0.0.1','root',''))
{
    echo 'Cound not connect to mysql';
    exit;
}
$sql = "show tables from $dbname";
$connect_mysql = mysqli_connect('127.0.0.1', 'root','');
$result = mysqli_query($connect_mysql, $sql);
if (!$result)
    $result = mysqli_query($sql);
echo "The tables from the database are: <br><br>";
if(!$result)
{
    echo "DB Error Unable to list tables <br>";
    echo 'MySQl Error: ' .mysqli_error();
    exit;
}
while ($row = mysqli_fetch_row($result))
{
    echo " Table: {$row[0]}<br>";
}


?>
