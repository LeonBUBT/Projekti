<?php 
require_once 'config.php';
require_once 'fetch_cards.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $database = new Database();
    $newCard = new CardType($database);

    $cardTypeID = $_POST['card_type_id'] ?? '';
    $typeName = $_POST['type_name'] ?? '';
    $category = $_POST['card_category'] ?? '';
    $imageUrl = $_POST['image_url'] ?? '';
    $description = $_POST['description'] ?? '';
    $cardName = $_POST['card_name'] ?? '';


    $newCard->updateCard([
        'type_name' => $typeName,
        'card_category' => $category,
        'image_url' => $imageUrl,
        'description' => $description,
        'card_name' => $cardName,
        'card_type_id' => $cardTypeID,
    ]);

    header("Location: ../admin.php");
    exit; 
}

?>