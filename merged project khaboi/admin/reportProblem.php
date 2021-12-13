<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

    <!-- Bootstrap Icon CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/reportProblemStyle.css" />
</head>

<body>
    <div class="contact-banner">


        <button type="button" class="btn btn-outline-light my-3" onclick="window.location.href='index.php'">HOME</button>

        <h1>KHABOI</h1>
        <h3>REPORT A PROBLEM TO MANAGEMENT</h3>
        <p class="contact-description">
            Dear Employee, We'd really love to hear your Problem! Please fill in the form below and
            submit
        </p>
    </div>
    <?php include('model/model.php');

    ?>
    <form name="contact-form" action="reportProblem.php" method="POST">
        <?php
        reportProblem();
        ?>
        <p id="demo"></p>
        <div class="form-control">
            <label>Full Name</label>
            <input name="Rname" placeholder="YOUR NAME" />
            <div class="error hide">Name is required</div>
        </div>

        <div class="form-control">
            <label>Email</label>
            <input name="Remail" placeholder="YOUR EMAIL" />
            <div class="error hide">Email is invalid</div>
        </div>

        <div class="form-control">
            <label>Phone</label>
            <input name="Rphone" placeholder="YOUR PHONE NUMBER"></input>
            <div class="error hide">Phone is invalid</div>
        </div>

        <div class="form-control">
            <label>Message</label>
            <textarea name="Rmessage" placeholder="YOUR REPORT"></textarea>
            <div class="error hide">Report is required</div>
        </div>

        <hr />

        <button type="submit" name="submitReport">SUBMIT</button>

    </form>


    <!--Bootstrap Bundle with Popper -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <script src="js/reportProblem.js"></script>
</body>

</html>