<?php
$logcookie = $_COOKIE['logname'];

echo "<html>";
echo "<head>";
echo "<title> Homepage </title>";
echo "</head>";
echo "<body>";
echo "<align = 'right'>";

echo "Welcome $logcookie ";
echo "<br><a href='logout.php'>Logout</a>";
echo "<center>";
echo "<h3> Shopper's Paradise</h3>";
echo "<h5> Shop till you drop!!!</h5>";
echo "<hr>";
echo "<br>";

echo "<table>";
echo "<tr align = 'center'>";
echo "'<td><a href='conf.php'>Confectionery</a></td>";
echo "</tr>";

echo "<tr align = 'center'>";
echo "'<td><a href='flowers.php'>Flowers</a></td>";
echo "</tr>";

echo "<tr align = 'center'>";
echo "'<td><a href='access.php'>Accessories</a></td>";
echo "</tr>";

echo "<tr align = 'center'>";
echo "'<td><a href='perf.php'>Perfumes</a></td>";
echo "</tr>";

echo "<tr align = 'center'>";
echo "'<td><a href='apparel.php'>Apparel</a></td>";
echo "</tr>";

echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

?>
