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
        if (!isset($_SESSION['userName'])) {
            header('location: index.php');
        }
        ?>

    </div>
    <div style="background: #FFB6C1; height: 61rem; text-align: center;">
        <div class="text-dark" style=" background-image: url('images/homePageBurgerDesign.png'); background-repeat:no-repeat;   background-attachment: fixed; background-position:right ">
            <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">DASHBOARD</h3>
            <?php include "dashBoardNav.php"; ?>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <table class="table bg-white my-4 py-4" style="border-radius: 35px;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SERIAL</th>
                                <th scope="col">NAME</th>
                                <th scope="col">LOCATION</th>
                                <th scope="col">CONTACT NUMBER</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j = 0; ?>
                            <?php foreach ($resturants as $i => $resturant) :  ?>
                                <tr>
                                    <td><?php echo $j = $j + 1 ?></td>
                                    <td><a href="showResturant.php?id=<?php echo $resturant['ID'] ?>"><?php echo $resturant['Name'] ?></a></td>
                                    <td><?php echo $resturant['Location'] ?></td>
                                    <td><?php echo $resturant['ContactNumber'] ?></td>
                                    <td><?php echo $resturant['Email'] ?></td>
                                    <td><img width="100px" src="uploads/<?php echo $resturant['image'] ?>" alt="<?php echo $resturant['Name'] ?>"></td>
                                    <td>
                                        <a href="editResturant.php?id=<?php echo $resturant['ID'] ?>">Edit</a>
                                        &nbsp
                                        <a href="controller/deleteResturant.php?id=<?php echo $resturant['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>


                </div>
                <div class="col-2"></div>
            </div>
            <!-- table -->














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