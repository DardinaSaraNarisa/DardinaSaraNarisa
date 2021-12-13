<?php
session_start();
require_once 'db_connect.php';
$conn = db_connNew();








if (isset($_POST['search_post_btn'])) {

    $id  = $_POST["id"];
    $query = "SELECT * FROM area_manager_info WHERE AreaManagerID='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {

            if (!isset($_SESSION['userName'])) {
                $row['Name'] = null;
                $row['Email'] = null;
                $row['PhoneNumber'] = null;
                $row['Password'] = null;
                $row['Address'] = null;
                $row['UserImage'] = null;
            }


?>

            <div class="rounded-top text-white d-flex flex-row" style="background-color: #ff1a3c; height:200px;">
                <div class="ms-4 mt-1 d-flex flex-column" style="width: 200px; height: 200px;">
                    <img src="images/<?php echo $row['UserImage']; ?>" name="e_image" image alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 250px; z-index: 1">

                </div>
                <div class="ms-3" style="margin-top: 130px;">
                    <!-- <input type="button" value="EDIT" class="btn-secondary-light"> -->
                    <input type="file" name="image"><br><br>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class=" ps-3 pt-1 pb-3">

                        <div class="row mt-2 ">


                            <div class="row ">
                                <div class="col-md-12">
                                    <input type="text" class="invalid form-control" name="e_name" placeholder="NAME" value="<?php echo $row['Name']; ?>" required>
                                    <?php $password = $row['Password'] ?>
                                </div>
                                <div class="col-md-12  pt-2"><input type="text" class="form-control" name="e_email" placeholder="EMAIL" value="<?php echo $row['Email']; ?>" required></div>
                                <div class="col-md-12  pt-2"><input type="text" class="form-control" name="e_phone" placeholder="PHONE NUMBER" value="<?php echo $row['PhoneNumber']; ?>" required></div>
                                <div class="col-md-12  pt-2"><input type="password" class="form-control" name="e_password" placeholder="UPDATE PASSWORD" value="<?php echo md5($password) ?>" required></div>


                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><input type="text" class="form-control" name="e_address" value="<?php echo $row['Address']; ?>" placeholder="ADDRESS" required></div>


                            </div>
                            <div class="mt-3 text-start "><button class="btn btn-primary profile-button" type="submit" name="save_profile">Save Profile</button></div>
                        </div>


                    </div>

                </div>
            </div>
<?php

        }
    } else {
        echo "data not found";
    }
}
?>