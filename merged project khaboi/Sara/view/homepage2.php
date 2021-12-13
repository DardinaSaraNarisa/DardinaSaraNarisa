

<?php 

session_start();


if(isset($_SESSION['username'])){



}
else{

    header('location: login.php');
}

?>






<!DOCTYPE html>


<html lang="en">
<head>
    <title>Khaboi</title>
</head>


 <?php include('header2.php')?>
<body>


    <fieldset>

        <p><br></p><p><br></p>
        <div style= "color: #394393;">
            <h1 align="center" >Hello, <?php echo $_SESSION['username'] ?> </span></h1>
            <h1 align="center" >Welcome</h1> 
            <h1 align="center" >To</h1>
            <h1 align="center" >The Restaurant KhaBoI</h1>
        </div>


    
    <p><br></p><p><br></p>
    </fieldset>
</body>

<div class="footer">
      <?php include('footer.php')?> 
</div>

</html>