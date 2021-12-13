<?php 

require_once '../model/model.php';

if (deleteResturant($_GET['id'])) {
    header('Location: ../dashBoard.php');
}

 ?>