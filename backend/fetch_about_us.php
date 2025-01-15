<?php 
    require 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
  
    try {
        $sql = "SELECT * FROM about_us";
        $about = $connect->prepare($sql);
        $about->execute(); 
    
        $aboutUs = $about->fetchAll(PDO::FETCH_ASSOC);
        // echo "data fetched";
    } catch (PDOException $e) {
        echo "Error fetching data: " . $e->getMessage();
    }
?>