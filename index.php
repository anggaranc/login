<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2>Login Form</h2>
<form action="" method="post">
    <label>UserName :</label>
    <input id="name" name="username" placeholder="username" type="text">
    <br />
    <label>Password :</label>
    <input id="password" name="password" placeholder="**********" type="password">
    <br />
    <input name="submit" type="submit" value=" Login ">
    <br />
    <span><?php echo $error; ?></span>
</form>
</body>
</html>