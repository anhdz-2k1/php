<html>
<head>
    <title>Assignment1</title>
</head>
<body>
<?php
$A = $_GET['name'];
$B = $_GET['membership'];
$C = $_GET['typeofM'];
$D = $_GET['point'];
echo "<br>";
echo "Customer is: $A";
echo "<br>";
echo "Membership Number: $B";
echo "<br>";
echo "Type Of Membership: $C";
echo "<br>";
echo "Point in Hand: $D";
echo "<br>";
if ($D >= 0 & $D <= 250)
{
    if ($C == "Basic Member")
    {
        echo "Additional Points: " .($D * 5 /100) ;
        echo "<br>";
    }
    elseif ($C == "Privileged Member")
    {
        echo "Additional Points: " .($D * 10 /100) ;
        echo "<br>";
    }
}
elseif ($D >= 251 & $D <= 500)
{
    if ($C == "Basic Member")
    {
        echo "Additional Points: " .($D * 75 /1000) ;
        echo "<br>";
    }
    elseif ($C == "Privileged Member")
    {
        echo "Additional Points: " .($D * 125 /1000) ;
        echo "<br>";
    }
}
elseif ($D >= 501 & $D <= 750)
{
    if ($C == "Basic Member")
    {
        echo "Additional Points: " .($D * 10 /100) ;
        echo "<br>";
    }
    elseif ($C == "Privileged Member")
    {
        echo "Additional Points: " .($D * 15 /100) ;
        echo "<br>";
    }
}
elseif ($D >= 751 & $D <= 1000)
{
    if ($C == "Basic Member")
    {
        echo "Additional Points: " .($D * 125 /1000) ;
        echo "<br>";
    }
    elseif ($C == "Privileged Member")
    {
        echo "Additional Points: " .($D * 175 /1000) ;
        echo "<br>";
    }
}
?>
<a href="Assignment1.html">Back</a>
</body>
</html>

