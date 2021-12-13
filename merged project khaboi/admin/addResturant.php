<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <?php


  ?>



  <?php
  require_once 'controller/ResturantInfo.php';

  $resturants = fetchAllResturants();
  ?>

  <!doctype html>


  <!--head Starts here-->

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <!-- Developer CSS -->
    <title>Restaurant</title>

    <link rel="stylesheet" href="02~css/Page_index.css">


  </head>
  <!--head ends here-->






  <!--body Starts here-->

  <body>
    <div class="col-12 " style="background:#ff8093;">
      <h2 style="font-size: 5rem; font-family: Arial"> &nbsp; KHABOI</h2>
      <?php
      include "navigationBar.php";

      ?>

    </div>
    <div style="background: #FFB6C1; height: 61rem; text-align: center;">
      <div class="text-dark" style=" background-image: url('images/homePageBurgerDesign.png'); background-repeat:no-repeat;   background-attachment: fixed; background-position:right ">
        <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">DASHBOARD</h3>
        <h3 style="text-align:start; line-height: 2; text-indent: 35px; font-size: 2rem; font-family: Arial">ADD RESTURANT</h3>
        <?php include "dashBoardNav.php"; ?>


        <div class="card ms-5 mb-3" style="max-width: 640px;">

          <div class="row">
            <div class="col-3">

            </div>
            <div class="col-8">
              <form action="controller/createResturant.php" method="POST" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="location">Location:</label><br>
                <input type="text" id="location" name="location"><br>
                <label for="contactNumber">ContactNumber:</label><br>
                <input type="tel" id="contactNumber" name="contactNumber"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <br>
                <input type="file" name="image"><br><br>
                <input type="checkbox" id="display" name="display">
                <label for="display">Display</label>
                <br>
                <br>
                <input type="submit" name="createResturant" value="Create">
                <input type="reset">
                <br>

              </form>
            </div>
            <div class="col-1"></div>
          </div>



        </div>




        <?php
        include "footer.php";

        ?>

      </div>


      <div>


        <!--Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
  <!--body ends here-->

</html>