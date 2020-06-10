<?php
$A = $_GET['n1text'];
$B = $_GET['n2text'];
$C = $_GET['n3text'];

$DA = $C*2/100;
$HRA = $C*5/100;
$F = 0;
echo "Full Name: " . $A . " " . $B . "<br>";
echo "Salary: $C";
echo "<br>";

echo "Dearness(DA) is: " . $DA  .  "<br>";
echo "House Rent Allowance (HRA) is: " . $HRA . "<br>";

 if($C >4000 & $C <5000){
     echo "Tax is: " . $D =250 . "<br>";
     echo "<br>";
     echo "Net Salary is: " . ($C+$DA+$HRA-$D);
 }
 elseif ($C > 5001 & $C < 6000){
     echo "Tax is: " . $D= 500 . "<br>";
     echo "<br>";
     echo "Net Salary is: " . ($C+$DA+$HRA-$D);
 }
 elseif ($C > 6000){
     echo "Tax is:  " .$D = 700 ;
     echo "<br>";
     echo "Net Salary is: " . ($C+$DA+$HRA-$D);
 }
 elseif ($C > 0 & $C < 4000){
     echo "Tax is: " . $D = 0;
     echo "<br>";
     echo "Net Salary is: " . ($C+$DA+$HRA-$D);
 }
?>

