<?php
    session_start();

?>



<?php 
                $passwordErr="";
                $rePasswordErr="";
                $newpass="";
                $check=0;
                $msg="";


                if(isset($_POST['newPass']) && isset($_POST['rePass'])){

                    //password validation


                     if(empty($_POST["newPass"])){
                        $passwordErr=" must need to fill password";
                      }else
                        $newpass=test_input($_POST["newPass"]);


                      if(empty($_POST["rePass"])){
                        $rePasswordErr=" must need to re-type password";
                      }else
                        $renewpass=test_input($_POST["rePass"]);
                      
                      //echo $newpass;  
                      if (!preg_match("/^[0-9a-zA-Z@%#$]{8,}$/",$newpass)) {
                            $passwordErr = "UPassword must not be less than eight (8) characters contain at least one of the special characters (@, #, $, %)";
                            
                      }else if($_POST["newPass"]==$_POST["rePass"]){


                            $_SESSION['newpassword']=$_POST["rePass"];

                            //echo "success";


                            header('location:../controller/forgotDone.php');

                      }
                      else
                        $rePasswordErr="didn't macth the password ";
                }




                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }


?>

<!DOCTYPE html>

<html lang="en">
 <?php include('header.php')?>

<style>
.error {color: #FF0000;}
</style>

<center>
<span class="error"><h1><?php echo $msg ?></h1></span>
<fieldset><p><br></p><p><br></p>
  <h1>PASSWORD RECOVERY</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		New Password:
        <input type="text"  name="newPass" id="password" onkeyup="passVal()"> <br><br>
        <span class="error" id="passwordErr">* <?php echo $passwordErr;?></span><br><br>

        Re-type Password:
        <input type="text"  name="rePass" id="rePassword" onkeyup="rePassVal()"> <br><br>
        <span class="error" id="rePasswordErr">* <?php echo $rePasswordErr;?></span><br><br>

        <input type="submit" value="Submit" /><p><br></p><p><br></p><p><br></p>
    </form>



</fieldset>

</center>

  

<body>

</body>


<script type="text/javascript" src="../javascript/regiPage.js"></script>

<div class="footer">
      <?php include('footer.php')?> 
</div>


</html>