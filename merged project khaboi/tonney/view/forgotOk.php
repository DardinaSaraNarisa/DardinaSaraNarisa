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
                        
                            $passwordErr = "not be less than eight (8) and one of the special characters (@, #, $, %)";
                            
                      }else if($_POST["newPass"]==$_POST["rePass"]){

                            $_SESSION['newpassword']=$_POST["rePass"];
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
<p><br></p><p><br></p>
    
    <table border="2px" width="20%"> 
    <tr>
        <td>
            
        
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table border="2px"  >
                  <tr>
                    <td>
                      New Password:
                      </td>
                      <td>
                          <input type="text"  name="newPass" id="password" onkeyup="passVal()"> 
                      </td>
                  </tr>
          </table>
        <span class="error" id="passwordErr">* <?php echo $passwordErr;?></span><br><br>

            
            <table border="2px"  >
                  <tr>
                    <td>
                        Re-type Password:
                    </td>
                    <td>
                        <input type="text"  name="rePass" id="rePassword" onkeyup="rePassVal()">
                    </td>
                  </tr>
          </table>
        <span class="error" id="rePasswordErr">* <?php echo $rePasswordErr;?></span><br><br>

        <input type="submit" value="Change" /><p><br></p><p><br></p><p><br></p>
    </form>
    </td>
    </tr>
    </table>

</center>

  

<body>

</body>

<script type="text/javascript" src="../javascript/registrationJavaScript.js"></script>


<?php include('footer.php')?>


</html>