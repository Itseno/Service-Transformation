<?php
session_start();
if (isset($_SESSION['login'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: /Login-Signup/login.php");
} else {
    header("Location: /Login-Signup/login.php");
}