

<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>






<!DOCTYPE html>
<html>

 <?php include('header2.php')?>



<b> <h1 align="center" style="color: #394393"><?php echo  "The List of All Foods";?></h1>


<div align="center">Search <input type="text" name="search" id="search"  onkeyup ="showResult(this.value)"></div>

<hr/>


<body onload="getAll()">

  <div id="foodList" style="color:#394393"> </div>





</body>


<script type="text/javascript" src="../javascript/ajax.js"></script>


  <?php include('footer.php')?>

  </html>