

<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>



<?php  
    require_once '../controller/readData.php';
    $user = fetchUsers($_SESSION['username']);

?>




<!DOCTYPE html>
<html>
<style>
.error {color: #394393;}


</style>
<head>
    <title>Profile</title>
</head>

 <?php include('header2.php')?>



 <?php



    

    echo "<h1 class=\"error\" align = \"center\">Profile Name : ".$user["Name"]."</h1>";

     echo "<h1 class=\"error\" align = \"center\">Email Address : ".$user["Email"]."</h1>";

     echo "<h1 class=\"error\" align = \"center\">User Name : ".$user["User_Name"]."</h1>";

     echo "<h1 class=\"error\" align = \"center\">Date of Birth : ".$user["Dob"]."</h1>";

     echo "<h1 class=\"error\" align = \"center\">Gender : ".$user["Gender"]."</h1>";

       


 
?>


<body>





</body>


  <?php include('footer.php')?>

  </html>