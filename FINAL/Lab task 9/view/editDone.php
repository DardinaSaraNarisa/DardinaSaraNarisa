

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



<p><br></p><p><br></p>
        <span > <b> <h1 align="center" style="color: Green"><?php echo  "Profile Successfully Updated  ";?></h1> </span>
<p><br></p><p><br></p>

<body>





</body>


  <?php include('footer.php')?>

  </html>