<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: /home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Power Saver | Log In</title>
    <link rel="stylesheet" type="text/css" href="/Stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="/Stylesheets/login-signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main id="main">
        <div class="title">
            <h1>Log In To Power Saver</h1>
        </div>
        <div class="form">
            <form method="post" action="login_script.php" name="login">
            	<label for="name">Username/Email</label><input type="text" name="username" onfocus="clearField(this)">
            	<label for="password">Password</label><input type="password" name="password" onfocus="clearField(this)">
            	<input type="submit" name="submit" value="Login" onclick="return checkLogin()">
            </form>
        </div>
    </main>
</body>
<script type="text/javascript" src="/Scripts/checkform.js"></script>
</html>