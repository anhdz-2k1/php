<?php
$number = 1;
echo "The cube of the first 10 numbers<br>";

for ($i = 0 ; $i < 10; $i++ )
{
    $number2 = $number*$number*$number;
    $number = $number+1;
    echo "$number2<br>";
}

?>
