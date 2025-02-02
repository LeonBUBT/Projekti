<?php
require_once 'config.php';
require_once 'fetch_cards.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['id'])) {
    $card_id = $_GET['id'];

    $database = new Database();
    $card = new CardType($database);

    if ($card->deleteCard($card_id)) {
        header("Location: ../admin.php?message=Card+deleted+successfully");
        exit();
    } else {
        header("Location: ../admin.php?error=Failed+to+delete+Card");
        exit();
    }
}
?>
