<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <h1>Coutomer</h1>
<h4>
<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("Ket noi thata bai");
$query = "select * from customer";
$result = $conn -> query($query);
if(!$result) die ("Fatal Error");

$rows = $result->num_rows;
for($j = 0; $j < $rows; ++$j )
{
    $row = $result -> fetch_array(MYSQLI_ASSOC);

    echo'<p><font color="red"> ' . 'name: '       .$row['name']      .'<br>' . '</font>' . '</p>';
    echo'<p><font color="blue">' . 'isbn:'         .$row['isbn']       .'<br>' . '</font>' . '</p>';
}
?>
</h4>

</p>
</body>
</html>