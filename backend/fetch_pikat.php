<?php
    require 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try{
        $sql = "SELECT * FROM pikat";
        $points=$connect->prepare($sql);
        $points->execute();

        $pikat = $points->fetchAll(PDO::FETCH_ASSOC);

        header('Content-Type: application/json');
        echo json_encode($pikat);
        // echo"data fetched";
    }catch(Exception $e){
        echo "something went wrong";
    }

?>