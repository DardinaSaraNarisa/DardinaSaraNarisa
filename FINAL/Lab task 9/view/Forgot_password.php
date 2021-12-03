

<?php  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once '../controller/readData.php';

        $Email = fetchUsersByEmail($_REQUEST['forgotEmail']);

        //echo "success";


    }


?>



<?php 



                $emailErr = "";

 
                if(isset($_POST['forgotEmail'])){

                       if(isset($Email["Email"]) && $_POST['forgotEmail']==$Email["Email"] && !empty($_POST['forgotEmail']))
                       {  
                          session_start();

                          $_SESSION['tempEmail']=$_POST['forgotEmail'];

                          //$_SESSION['oldpassword']=$Email['Password'];
                          
                          header('location:passwordForm.php');
                       }else
                          $emailErr="invalid email";
                }
                
?>

<!DOCTYPE html>

<html lang="en">
 <?php include('header.php')?>

<style>
.error {color: #FF0000;}
</style>

<center>
<fieldset><p><br></p><p><br></p>
  <h1>FORGOT PASSWORD</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter Email:
        <input type="text"  name="forgotEmail" /> <br><br>
        <span class="error">* <?php echo $emailErr;?></span><br><br>
        <input type="submit" value="Submit" /><p><br></p><p><br></p><p><br></p>
    </form>

</fieldset>

</center>

  

<body>

</body>


<?php include('footer.php')?>


</html>