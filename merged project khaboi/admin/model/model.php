<?php

require_once 'db_connect.php';



function showAllResturants()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `resturant_info` where Display = 1 ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showResturant($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `resturant_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchResturant($resturant_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `resturant_info` WHERE Name LIKE '%$resturant_name%'";


    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addResturant($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into resturant_info (Name, Location, ContactNumber, Email, image, Display)
VALUES (:name, :location, :contactNumber, :email, :image, :display)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':location' => $data['location'],
            ':contactNumber' => $data['contactNumber'],
            ':email' => $data['email'],
            ':image' => $data['image'],
            ':display' => $data['display']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateResturant($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE resturant_info set Name = ?, Location = ?, ContactNumber = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['location'], $data['contactNumber'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteResturant($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `resturant_info` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function registerNewUser()
{
    if (isset($_POST['reg_user'])) {
        $conn = db_connNew();
        $errors = array();
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $image =  mysqli_real_escape_string($conn, $_POST['image']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //check db for existing user with same email
        $user_check_query = "SELECT * FROM  area_manager_info  WHERE Email = '$email' LIMIT 1";

        $results = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($results);
        if ($user) {
            if ($user['Email'] == $email) {
                array_push($errors, "This Email has already been used");
                echo "* This Email has already been used";
            }
        }

        //register the user if no error

        if (count($errors) == 0) {
            $passwordConfirmed = md5($password);
            $query = "INSERT INTO area_manager_info (Name, UserName, UserImage, Email, Gender, PhoneNumber, Address, Password) VALUES ('$name', '$user_name', '$image', '$email', '$gender', '$phone_number', '$address', '$passwordConfirmed')";
            mysqli_query($conn, $query);
        } else echo " TRY AGAIN";
    }
}


function user_login_trigger()
{
    if (isset($_POST['button_UserLogin']))
        $userLoginInfo = user_login($_POST);
}
function user_login($data)
{
    $conn = db_connNew();


    $userEmail = $data['inputUserEmail'];
    $userPassword = md5($data['inputUserPassword']);

    $query = "SELECT * FROM area_manager_info WHERE Email='$userEmail' AND Password='$userPassword' ";

    if (mysqli_query($conn, $query)) {
        $result = mysqli_query($conn, $query);
        $user_info = mysqli_fetch_assoc($result);

        if ($user_info) {

            // header('location:/');
            $_SESSION['userID'] = $user_info['AreaManagerID'];
            $_SESSION['userEmail'] = $user_info['Email'];
            $_SESSION['userName'] =  $user_info['Name'];
            $_SESSION['userPassword'] = $user_info['Password'];
            $_SESSION['userImage'] = $user_info['UserImage'];
            return $msg = "login success!";
        } else {
            //  header('location:viewProfile.php');
            return $errmsg = "Your Email or Password is incorrect!";
        }
    }
}

function user_logout()
{

    //  UserLogout
    if (isset($_GET['logoutuser'])) {
        if ($_GET['logoutuser'] = 'logout') {
            unset($_SESSION['userID']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['userName']);
            unset($_SESSION['userPassword']);



            header('location:index.php');
        }
        header('location:index.php');
    }
}


function UpdateUser()
{

    if (isset($_POST['save_profile'])) {
        $conn = db_connNew();
        $errors = array();
        $name = mysqli_real_escape_string($conn, $_POST['e_name']);
        //$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $image =  mysqli_real_escape_string($conn, $_POST['image']);
        $email = mysqli_real_escape_string($conn, $_POST['e_email']);
        //$gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['e_phone']);
        $address = mysqli_real_escape_string($conn, $_POST['e_address']);
        $pass = mysqli_real_escape_string($conn, $_POST['e_password']);
        $password = md5($pass);
        $userID = $_SESSION['userID'];

        //check db for existing user with same email
        // $user_check_query = "SELECT * FROM  area_manager_info  WHERE Email = '$email' LIMIT 1";

        // $results = mysqli_query($conn, $user_check_query);
        // $user = mysqli_fetch_assoc($results);
        // if ($user) {
        //     if ($user['Email'] == $email) {
        //         array_push($errors, "This Email has already been used");
        //         echo "* This Email has already been used";
        //     }
        // }

        //update the user if no error

        if (count($errors) == 0) {
            // $passwordConfirmed = md5($password);

            $query = "UPDATE area_manager_info SET Name='$name', UserImage='$image', Email='$email', PhoneNumber='$phone_number' , Address='$address' , Password='$password' WHERE AreaManagerID= '$userID'";
            // $query = "INSERT INTO area_manager_info (Name, UserImage, Email, PhoneNumber, Address, Password) VALUES ('$name', '$image', '$email',  '$phone_number', '$address', '$passwordConfirmed')";
            mysqli_query($conn, $query);
        } else echo " TRY AGAIN";
    }
}

function reportProblem()
{
    if (isset($_POST['submitReport'])) {
        $conn = db_connNew();
        $errors = array();
        $name = mysqli_real_escape_string($conn, $_POST['Rname']);
        $email = mysqli_real_escape_string($conn, $_POST['Remail']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['Rphone']);
        $message = mysqli_real_escape_string($conn, $_POST['Rmessage']);

        //report from the user if no error

        if (count($errors) == 0) {
            if ($name != null && $email != null && $phone_number != null && $message != null) {
                $query = "INSERT INTO reportproblem (Name, Email,PhoneNumber, Report) VALUES ('$name', '$email', '$phone_number', '$message')";
                mysqli_query($conn, $query);
                echo " REPORT SENT SUCCESSFULLY! ";
                //header('location:reportProblem.php');
            } else {
                echo " TRY AGAIN";
            }
        } else echo " TRY AGAIN";
    }
}
