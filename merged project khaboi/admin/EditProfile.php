<?php

include 'model/model.php';

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



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>


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
            $currentLoggedInUserID = $_SESSION['userID'];;
        } else {
            $currentLoggedInUserID = null;
            header('location: index.php');
        }


        ?>
    </div>
    <div style="background: #FFB6C1; height: 60rem; text-align: center;">
        <div class="text-dark" style=" background-image: url('images/homePageBurgerDesign.png'); background-repeat:no-repeat;   background-attachment: fixed; background-position:right ">
            <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">EDIT PROFILE</h3>
            <div class="mt-3 text-start ">

            </div>

            <section class="h-100 gradient-custom-2">
                <div class="container py-2 h-100">
                    <div class="row d-flex justify-content-center align-items-start h-50">
                        <div class="col col-lg-9 col-xl-7">
                            <div class="card">

                                <div class="p-4 text-black" style="background-color: #f8f9fa;">

                                </div>
                                <form method="POST" id="editForm">

                                    <?php UpdateUser(); ?>

                                </form>
                                <form method="POST" id="editForm1">


                                </form>


                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <div class="container ">
                <div class="row ">

                    <div class="col-8 ">
                        <div class="container rounded bg-white my-5">

                        </div>
                    </div>
                    <div class="col-2 ">

                    </div>
                </div>


            </div>
            <?php
            include "footer.php";

            ?>

        </div>


    </div>





    <script>
        $(document).ready(function() {

            // e.preventDefault();
            //   var id = $(currentLoggedInUserID).val();
            //   var id = "<?php //echo $currentLoggedInUserID; 
                            ?>";
            var id = <?php echo $currentLoggedInUserID; ?>;
            // var id =  19;


            //$().val();
            $.ajax({

                type: "POST",
                url: "model/editProfileModel.php",
                data: {
                    "search_post_btn": 1,
                    "id": id,

                },
                dataType: "text",
                success: function(response) {
                    $("#editForm").html(response);
                }
            });

        });
    </script>


    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- jquery-CDN -->

</body>
<!--body ends here-->




</html>