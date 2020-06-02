<?php
include 'Session3Snippet7.php';
use aptech\{Boston, NewYork};
use function aptech\{foo1, foo2};
$d = new Boston();
$d -> say();
echo '</br>';
$n = new NewYork();
$n -> say();
echo '</br>';
foo1();
echo '</br>';
foo2();
?>
