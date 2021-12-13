

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

<style>
.error {color: #394393;}


</style>



<body onload="getCartList()">


<p><br></p><p><br></p>
    <div id="cartList">  </div>
<p><br></p><p><br></p>


</body>



<script type="text/javascript" src="../javascript/ajax.js"></script>


<div class="footer">
      <?php include('footer.php')?> 
</div>

  </html>