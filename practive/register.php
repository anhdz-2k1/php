<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Registration Members</h1>
<form action="register.php" method="get">
    Full name: <br>  <input type="text" name="name">
    <br>
    Email:    <br>   <input type="email" name="email">
    <br>
    Username:  <br>  <input type="text" name="username">
    <br>
    Password: <br>   <input type="password" name="password">
    <br>
    <input type="submit" name="registration" value="registration">
</form>

</body>
</html>
<?php
if (isset($_GET['registration'])) {
    include 'login.php';
    if ($conn->connect_error) die("fatal error");

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['username']) && isset($_GET['password'])) {
        $name = mysql_entities_fix_string($conn, $_GET['name']);
        $email = mysql_entities_fix_string($conn, $_GET['email']);
        $username = mysql_entities_fix_string($conn, $_GET['username']);
        $password = mysql_entities_fix_string($conn, $_GET['password']);
        $hash = password_hash($password , PASSWORD_DEFAULT);

        if($name == "" || $email == "" || $username == "" || $hash == "")
        {
            echo "Vui lòng điền đầy đủ thông tin";
        }
        else
        {
            $query = "insert into user (fullname, email, username, password) values ('$name', '$email', '$username', '$hash')";
            $result = mysqli_query($conn,$query);

            session_start();
            $_SESSION['fullname'] = $name;
            $_SESSION['username'] = $username;

            if (!$result) die("Đăng kí thất bại");
            else
            {
                header("location: ../practive/welcome.php");
                exit();
            }
        }
    }else{
        header("Location: ../register.php");
        exit();
    }
}
function mysql_entities_fix_string($connection, $string)
{
    return htmlentities(mysql_fix_string($connection, $string));
}
function mysql_fix_string($connection, $string)
{
    if (get_magic_quotes_gpc()) $string = stripcslashes($string);
    return $connection->real_escape_string($string);
}
?>
