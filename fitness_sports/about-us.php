<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>About Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       .about-us .title {
            font-family: Calibri, "Helvetica", san-serif;
            line-height: 1.5em;
            color: black;
            font-size: 40px;
            position: relative;
            text-align: center;
        }

     .about-us .title:before {
            content: "";
            position: absolute;
            width: 30%;
            height: 4px;
            bottom: 0;
            left: 34%;
            border-bottom: 3px solid red;
        }

        .about-us img {
            width: 100% !important;
            min-height: 400px;
        }

        .contact-us .card {
            margin-top: 50px;
            padding: 50px;
            background-color: #a4a4a4;
        }

        .contact-us .card .card-body {
            color: black;
            /* font-weight: bolder; */
            font-size: 18px;
        }
        .about-us .lead{
            color:black!important;
        }
    </style>
</head>

<body>


    <?php
    include('php-layout-files/navbar.php')
    ?>

    <section class="about-us">
        <div class="container mt-5">
            <h3 class="text-center title  mt-5">About Us</h3>
            <div class="row my-5">
                <div class="col-md-5 mb-4">

                    <img src="images/carosel-2.jpg" class="img-fluid rounded" alt="" srcset="">
                </div>
                <div class="ml-3 col-md-5">
                    <div class="content">
                        <p class="lead">We are a students of North South University.
                           <br> <B> ECE Department.</B> 
                           <br>
                           <br><B>Md. Shakur Zaman</B> - 1531378642
                           <br><B>Eram Islam Sakib</B> - 1612531642
                           <br><B>Maisha Mridu</B> - 1812075042
                           <br><B>Rifat Reza Ratul</B> - 1821005042
                        
                        </p>
                           
                        <a name="" id="" class="btn btn-outline-warning" href="#" role="button">Explore Now</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php
    include('php-layout-files/footer.php')
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>