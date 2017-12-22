<?php

require_once('../PHP-Includes/User.php');
require_once('../PHP-Includes/DB.php');

if (!empty($_POST['realname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    session_start();
    
    $con = new DB; // Connect to and check connection to database
    $con->check_db();

    $name = $_POST['realname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid email");
    }

    $user = new User($name, $username, $email, $password, $con);

    $name = $con->escape_string($name);
    $username = $con->escape_string($username);
    
    $password = $con->escape_string($password);
    //$query = "INSERT INTO users (user_name, user_email, user_password) VALUES(?, ?, ?)";
    
    if ($user->test_name($username)) {
        echo 'Sorry, this username is already taken.';
        session_destroy();
        exit();
    } elseif ($user->test_email($email)) {
        echo 'Sorry, this email is already being used.';
        session_destroy();
        exit();
    }

    $user->sign_up($name, $username, $email, $password); // Insert info into database
    $user->verify_email();
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;

    header('Location: ../home.php');

    
} else {
    header('Location: signup.php');
    exit();
}