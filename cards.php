<?php 
    $pageTittle = 'Cards';
    include 'header.php';
?>
<main>
    <div class="wrapper">

        <!-- <div class="card-container">
            <img src="images/debit-card-test1.png" alt="Classic debit card">
            <div class="card-container-info">    
                <h2>Classic Debit Card</h2>
                <p>
                    The Nexus Classic Debit Card is simple, secure, and ideal for everyday use. 
                    With no annual fees, it provides instant access to your funds and essential features like fraud protection. 
                    A perfect choice for practical banking.
                    <br>
                    <button>Apply</button>
                </p>
            </div>    
        </div> -->



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
