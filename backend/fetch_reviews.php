<?php 
    require 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try{
        $sql = "SELECT * FROM reviews";
        $review=$connect->prepare($sql);
        $review->execute();
        $reviews = $review->fetchAll();
        // echo "data fetched";
    }catch(Exception $e){
        echo "something went wrong";
        echo $e->getMessage();
    }
?>