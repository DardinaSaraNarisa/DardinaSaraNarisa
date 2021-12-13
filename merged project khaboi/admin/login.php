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
       if (isset($_SESSION['userName'])) {
            header('location: dashBoard.php');
        } 

        ?>
    </div>
    <div style="background: #FFB6C1; height: 52rem; text-align: center;">
        <div class="text-dark" style=" background-image: url('images/homePageBurgerDesign.png'); background-repeat:no-repeat;   background-attachment: fixed; background-position:right ">
            <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">LOGIN</h3>
            <section class="vh-50">
                <div class="container py-5 h-50">
                    <div class="row d-flex justify-content-center align-items-center h-50">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <h3 class="mb-5">LOGIN</h3>

                                    <form action="login.php" method="POST">

                                        <?php include "model/model.php";
                                        $msg = user_login_trigger(); ?>
                                        <div class="form-outline mb-4">
                                            <input type="email" placeholder="EMAIL" name="inputUserEmail" id="typeEmailX-2" class="form-control form-control-lg" required />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" placeholder="PASSWORD" name="inputUserPassword" id="typePasswordX-2" class="form-control form-control-lg" required />

                                        </div>



                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="button_UserLogin">Login</button>

                                        <hr class="my-4">
                                       



                                    </form>


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