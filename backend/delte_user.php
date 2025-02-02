<?php
require_once 'config.php';
require_once 'user_class.php';
session_start();

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $database = new Database();
    $user = new User($database);

    if ($user->deleteUser($user_id)) {
        header("Location: ../admin.php?message=User+deleted+successfully");
        exit();
    } else {
        header("Location: ../admin.php?error=Failed+to+delete+user");
        exit();
    }
}
?>
