<?php

session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>RestroBook</title>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <?php include_once('assets/navigation.php'); ?>

    <!-- RESTAURANT CARDS -->
    <div class="main">
        <ul class="cards">

            <div class="card custom-body">
                <div class="card_image">
                    <img src="images/jcsetlocationbro.png" alt="">
                </div>
                <div class="card-body">
                    <div class="card_link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        Locations
                    </div>
                    <ul class="dropdown-menu custom-drop-color location-dropdown">
                        <li><a class="dropdown-item loc_changer" href="#">City Name</a></li>

                    </ul>
                </div>
            </div>
        </ul>
    </div>

    <footer class="fixed-bottom custom-footer-css" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="row justify-content-center custom-footer-inner">
            <div class="col-md text-center custom-foot-css align-items">
                <div class="footer-site-logo mb-4">
                    <a href="#">RestroBook</a>
                </div>
                <ul class="list-unstyled nav-links mb-5">
                    <li>
                        <a aria-current="page" href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="booked.php">Booked</a>
                    </li>
                    <li>
                        <a href="https://github.com/RS2-Codes/Bluelearn">Repo</a>
                    </li>

                </ul>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright:
                <a class="text-white" href="">RS2 Codes</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
?>