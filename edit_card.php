<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start(); 
    }
    require_once 'backend/config.php';
    require_once 'backend/fetch_cards.php';
   
    $cardTypeID = $_GET['id'] ?? ''; 


    if (!empty($cardTypeID)) {

        $database = new Database();
        $newCard = new CardType($database);

        $cardDetails = $newCard->getCardDetails($cardTypeID);
    

        $typeName = $cardDetails['type_name'] ?? '';
        $category = $cardDetails['card_category'] ?? '';
        $imageUrl = $cardDetails['image_url'] ?? '';
        $description = $cardDetails['description'] ?? '';
        $cardName = $cardDetails['card_name'] ?? '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Card</title>
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/editcard.css">
</head>
<body>

    <div class="card-form" id="card-form">
        <h2 class="form-title">Edit Card</h2>
        <form  action="backend/editCard.php" method="POST" id="card-form-content">
            <input type="hidden" name="card_type_id" value="<?php echo $cardTypeID; ?>">

            <input type="hidden" id="card-id">
            <div class="form-group">
                <label for="type-name">Type Name:</label>
                <select name="type_name" id="type-name" value="<?php echo htmlspecialchars($typeName); ?>">
                    <option value="">---</option>
                    <option value="classic" <?php echo ($typeName == 'classic') ? 'selected' : ''; ?>>Classic</option>
                    <option value="premium" <?php echo ($typeName == 'premium') ? 'selected' : ''; ?>>Premium</option>
                    <option value="elite" <?php echo ($typeName == 'elite') ? 'selected' : ''; ?>>Elite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card-category">Category:</label>
                <select name="card_category" id="card-category" value="<?php echo htmlspecialchars($category); ?>">
                    <option value="">---</option>
                    <option value="debit" <?php echo ($category == 'debit') ? 'selected' : ''; ?>>Debit</option>
                    <option value="credit" <?php echo ($category == 'credit') ? 'selected' : ''; ?>>Credit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image-url">Image URL:</label>
                <input type="text" name="image_url" id="image-url" value="<?php echo htmlspecialchars($imageUrl); ?>" required>
            </div>
            <div class="form-group">
                <label for="card-name">Card Name:</label>
                <input type="text" id="card-name" name="card_name" value="<?php echo htmlspecialchars($cardName); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required><?php echo htmlspecialchars($description); ?></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="save-btn">Save</button>
                <button type="button" class="cancel-btn" onclick="window.location.href='admin.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
