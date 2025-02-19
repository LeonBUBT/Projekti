<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTittle)? $pageTittle: 'Nexus Bank'; ?></title>
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/cards.css">
    <link rel="stylesheet" href="CSS/kontakt.css">
    <link rel="stylesheet" href="CSS/pikat.css">
    <link rel="stylesheet" href="CSS/rrethnesh.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
    <div id="nav-bar">
        <div id="register">
            <?php 
                if(isset($_SESSION['user_id'])){
                    echo"
                    <a href='dashboard.php'>Dashboard</a>
                    ";
                }else{
                    echo"
                    <a href='apply.php'>Register to Nexus Bank</a> 
                    ";
                }
                ?>
                <hr>
        </div>
        <ul>
            <li><a href="rrethnesh.php">About Us</a></li>
            <li><a href="kontakt.php">Contact Us</a></li>
            <li><a href="pikat.php">Search locations</a></li>
        </ul>
    </div>

    <div id="header">
        <a href="index.php"><img id="header-img" src="images/logo.png" alt="Nexus Logo" width="75px"></a>
        <ul id="header-ul1">
            <li><h1>Nexus</h1></li>
            <li><h1>Bank</h1></li>
        </ul>
        
        <ul id="header-ul2">
            <li><a href="loans.php">Credit Products</a></li>
            <li><a href="cards.php">Cards</a></li>
        </ul>
    </div>