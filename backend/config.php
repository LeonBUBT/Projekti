<?php
  $server='localhost';
  $dbname='nexusbank';    
  $username='root';
  $password='';

  try{
    $connect = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
  }catch(PDOException $e){
    echo $e->getMessage();
  }  
?>