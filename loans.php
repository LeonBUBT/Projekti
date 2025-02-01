<?php 
require_once 'header.php';
$pageTitle = 'Loans';
?>

<main>
    <div class="loan-wrapper">
        <?php
            require 'backend/config.php';
            require 'backend/fetch_loans.php';

            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            $database = new Database();
            $loanTypes = new Loans($database);

            $loans = $loanTypes->getLoans();

            if (count($loans) > 0) {
                foreach ($loans as $loan) {
                    echo "<div class='card-container'>
                            <img src='uploads/".$loan['loan_img']."' alt='" . $loan['name'] . "'>
                            <div class='card-container-info'>    
                                <h2>" . $loan['name'] . "</h2>
                                <p>
                                    " . $loan['description'] . "
                                    <br>
                                    <button onclick=\" window.location.href='http://localhost/Projekti/apply.php';\" >Apply</button>
                                </p>
                            </div>    
                          </div>";
                }
            } else {
                echo "No avilable loans found.";
            }
        ?>

    </div>
</main>

<?php require_once 'footer.php';?>