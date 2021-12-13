<?php
session_start();
if (isset($_SESSION['userName'])) {
    $currentLoggedInUser = $_SESSION['userName'];
    $myID =  $_SESSION['userID'];
    $dashBoard = null;
    $profile = null;
} else {
    $currentLoggedInUser = "NoUser";
    $dashBoard = "hidden";
    $profile = "hidden";
    $myID = "noUser";
}


//  UserLogout
if (isset($_GET['logoutuser'])) {
    if ($_GET['logoutuser'] = 'logout') {
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        unset($_SESSION['userPassword']);
    }
}

?>

<!doctype html>

<html lang="en">


<!--head Starts here-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <link rel="stylesheet" href="02~css/Page_index.css">


</head>
<!--head ends here-->






<!--body Starts here-->

<body>
    <ul class="nav" style="background: #ff1a3c;">
        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" aria-current="page" href="index.php"> &nbsp; &nbsp; &nbsp; &nbsp; HOME</a>
        </li>


        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" aria-current="page" href="dashBoard.php" <?php echo $dashBoard; ?>>DASHBOARD</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" aria-current="page" href="registration.php">REGISTRATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" aria-current="page" href="login.php">LOGIN</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" type="submit" name="editProfile" data-role="profileEdit" id="editProfile " aria-current="page" href="EditProfile.php" <?php echo $profile; ?>>PROFILE</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-light  fs-6 fw-bold"><?php echo $currentLoggedInUser; ?></a>
            <!-- </li>//$currentLoggedInUser; -->
        <li class="nav-item">
            <a class="nav-link active text-white fs-6 fw-bold" href="?logoutuser=logout" name="logoutuser">LOGOUT</a>
        </li>

    </ul>



    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->

</html>