<?php

    require_once '../model/db_connect.php';


    $q=$_GET["q"];
    $q2=$_GET["q2"];


    $conn = db_conn();


    
    $sql = "INSERT INTO cart_list( Name ,Price) VALUES (:Name,:Price)";
    
    
    try{

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            ':Name'                =>    $q,
            ':Price'              =>   $q2
            
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    //return true;

  ?>
  


