<?php
require_once('../PHP-Includes/User.php');
require_once('../PHP-Includes/DB.php');

if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash'])){
    session_start();
    $db = new DB;
    $email = $db->escape_string($_GET['email']);
    $hash = $db->escape_string($_GET['hash']);

    $query = "SELECT user_email, user_verify FROM users WHERE user_email = '$email' AND user_verify = '$hash' AND user_active = '0'";
    $result = $db->db_query($query);

    if ($result->num_rows > 0) {
        $query = "UPDATE users SET user_active='1' WHERE user_email = '$email' AND user_verify = '$hash' AND user_active = '0'";
        $db->db_query($query);
        echo 'Thank you for verifying, you may access the rest of the website now. If you haven\'t logged in yet, you may do so <a href="/login-form.php">here</a>';
        $_SESSION['active'] = true;
    } else {
        echo 'invalid';
    }
}else{
    echo 'invalid';
}