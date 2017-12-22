<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: /home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Power Saver | Sign Up</title>
    <link rel="stylesheet" type="text/css" href="/Stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="/Stylesheets/login-signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main id="main">
        <div class="title">
            <h1>Sign Up For Power Saver</h1>
        </div>
        <div class="form">
            <form method="post" action="signup_script.php" name="signup">
            	<label for="name">Name</label><input type="text" name="realname" onfocus="clearField(this)">
            	<label for="username">Username</label><input type="text" name="username" onfocus="clearField(this)">
            	<label for="email">Email</label><input type="text" name="email" onfocus="clearField(this)">
            	<label for="password">Password</label><input type="password" name="password" onfocus="clearField(this)">
            	<input type="submit" name="submit" value="Sign Up" onclick="return checkSignup()" onfocus="clearField(this)">
            </form>
        </div>
    </main>
</body>
<script type="text/javascript" src="/Scripts/checkform.js"></script>
</html>