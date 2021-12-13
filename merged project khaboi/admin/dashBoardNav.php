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
    <div class="row ms-1 mb-4" style="border-radius: 25px;">
        <div class="col-7">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active text-white mx-1 fs-6 fw-bold" aria-current="page" href="addResturant.php" style="background: #ff1a3c; border-radius: 35px;"> &nbsp; &nbsp; &nbsp; &nbsp; ADD RESTAURANT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white mx-1 fs-6 fw-bold" aria-current="page" href="dashBoard.php" style="background: #ff1a3c; border-radius: 35px;">SHOW ALL RESTAURANTS</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link active text-white mx-1 fs-6 fw-bold" aria-current="page" href="login.php" style="background: #ff1a3c; border-radius: 35px;">SEARCH RESTAURANT</a> -->
                    <!-- [SEARCH FORM] -->
                    <form method="post" action="findResturant.php" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="SEARCH RESTRURANTS" aria-label="Search" name="resturant_name" style="border-radius: 35px;">
                        <button class="btn text-light" name="findResturant" type="submit" style="border-radius: 35px; background: #ff1a3c;">Search</button>
                    </form>

                </li>



            </ul>
        </div>
        <div class="col-5">

        </div>
    </div>




    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->





</html>