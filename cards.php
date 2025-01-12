<?php 
    $pageTittle = 'Cards';
    include 'header.php';
?>
<main>
    <div class="wrapper">
        <?php
            require './backend/fetch_cards.php';
            if (count($cardTypes) > 0) {
                foreach ($cardTypes as $card) {
                    echo "<div class='card-container'>
                            <img src='uploads/".$card['image_url']."' alt='" . $card['card_name'] . "'>
                            <div class='card-container-info'>    
                                <h2>" . $card['card_name'] . "</h2>
                                <p>
                                    " . $card['description'] . "
                                    <br>
                                    <button>Apply</button>
                                </p>
                            </div>    
                          </div>";
                }
            } else {
                echo "No card types found.";
            }
        ?>

    </div>
</main>
<?php include 'footer.php'; ?>
