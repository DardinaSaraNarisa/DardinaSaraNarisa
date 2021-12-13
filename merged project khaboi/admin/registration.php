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
            <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">REGISTRATION</h3>
            <section class="">
                <div class="container h-50 mb-5">
                    <div class="row d-flex justify-content-center align-items-center h-50">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card  text-black" style="border-radius: 25px; ">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">REGISTER</p>

                                            <form class="mx-1 mx-md-4 " action="registration.php" method="POST">
                                                <?php include('model/model.php');
                                                registerNewUser();
                                                ?>

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="text" placeholder="NAME" name="name" id="form3Example1c" class="form-control" required />

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="text" placeholder="USER NAME" name="user_name" id="form3Example1c" class="form-control" required />

                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <input type="file" class="form-control me-3" name="image" id="customFile" placeholder="Upload User Image" /> <label>IMAGE</label>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="email" placeholder="EMAIL" name="email" id="form3Example3c" class="form-control" required />

                                                    </div>
                                                </div>


                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            MALE &nbsp;
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            FEMALE
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="tel" placeholder="PHONE NUMBER" name="phone_number" id="form3Example1c" class="form-control" required />

                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="text" placeholder="ADDRESS" name="address" id="form3Example1c" class="form-control" required />

                                                    </div>
                                                </div>


                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" placeholder="PASSWORD" name="password" id="form3Example4c" class="form-control" required />

                                                    </div>
                                                </div>





                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg" name="reg_user">Register</button>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="images/RegisterPageDesign.jpg" class="img-fluid" alt="Sample image">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>














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