<?php 
    require 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
  
    try {
        $sql = "SELECT * FROM card_type";
        $cards = $connect->prepare($sql);
        $cards->execute(); 
    
        $cardTypes = $cards->fetchAll(PDO::FETCH_ASSOC);
        // echo "data fetched";
    } catch (PDOException $e) {
        echo "Error fetching data: " . $e->getMessage();
    }
?>