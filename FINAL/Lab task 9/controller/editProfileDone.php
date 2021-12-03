
<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>


<?php
     
    require_once '../model/model.php';


     $data['Name1']                     =     $_SESSION['name1'];
     $data['email1']                 =        $_SESSION['email1'];
     $data['username']                 =      $_SESSION['username'];


    if (updateUsers($data)) {
        //echo 'Successfully updated!!';
        header('location:../view/editDone.php');

    } else {
        echo 'You are not allowed to access this page.';    
    }
            
?>