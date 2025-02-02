<?php
require_once 'config.php';
require_once 'user_class.php';
session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    $database = new Database();
    $user = new User($database);

    if ($user->login($email, $password)) {
        if($_SESSION['role']==1){
            header("Location: ../admin.php");
            exit();
        }
        header("Location: ../dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: ../login.php");
        exit();
    }
}?>
