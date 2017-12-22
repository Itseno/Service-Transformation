<?php
require_once(__DIR__ . '/../PHP-Includes/User.php');
require_once(__DIR__ . '/../PHP-Includes/DB.php');

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    
    $con = new DB; // Connect to and check connection to database
    $con->check_db();

    $nickname = $_POST['username'];
    $password = $_POST['password'];

    $nickname = $con->escape_string($nickname);
    $password = $con->escape_string($password);

    $data = User::login($nickname, $password, $con);

    if (($data['user_nickname'] === $nickname || $data['user_email'] === $nickname) && password_verify($password, $data['user_password']) && $data['user_active'] === '1') {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $data['user_nickname'];
        $_SESSION['active'] = true;
        
        if ($data['user_active'] === '1') {
            $_SESSION['active'] = true;
        } else {
            $_SESSION['active'] = false;
        }
        
        header("Location: /home.php");
    } else {
        header("Location: login.php");
    }
    //$name = $con->escape_string($name);
    //$password = $con->escape_string($password);
} else {
    header('Location: login.php');
}