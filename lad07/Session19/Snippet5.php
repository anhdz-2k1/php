<?php
$cookieval = $_COOKIE['uname'];
?>
<html>
<?php
if (isset($cookieval))
{
    echo "Welcome $cookieval";
}
else
{
    echo "You need to login";
}
?>
</html>
