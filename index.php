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
    <div class="nav-div">
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(0, 0, 0, 0.2)">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/RB.png" alt="RestroBook" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <?php if ($login == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="booked.php">Booked</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item dropdown">
                        <?php
                        $restro_locations = new restroLocData;
                        if (isset($userLocation)) {
                            $restro_locations->setrestroLocId($userLocation);
                            $restroLocs = $restro_locations->restroLocShowById();
                        ?>
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $restroLocs['restro_loc_city_name']; ?></a>
                        <?php } else { ?>
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Locations</a>
                        <?php }
                        ?>


                        <ul class="dropdown-menu custom-drop-color location-dropdown">
                            <?php foreach ($restro_locations->restroLocShow() as $restroLoc) {
                                if ($restroLoc['restro_loc_city_name'] == '') {
                                    continue;
                                }
                            ?>
                                <li><a class="dropdown-item loc_changer" href="#" data_loc_id='<?php echo $restroLoc['restro_loc_id']; ?>'><?php echo $restroLoc['restro_loc_city_name']; ?></a></li>
                            <?php
                                //echo $restroLoc['restro_loc_city_name'] . '<br>';
                            } ?>
                        </ul>

                    </li>

                </ul>
                <style>

                </style>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <?php if ($login == 0) { ?>
                        <a class="login-trigger" id="login-trigger" href="#" data-target="#login" data-toggle="modal">Login/Register</a>
                    <?php } else { ?>
                        <div class="logged-user dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $userEmail; ?></a>
                            <ul class="dropdown-menu custom-drop-color location-dropdown">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>

                        </div>
                        <a class="login-trigger" id="login-trigger" href="#" data-target="#login" data-toggle="modal" style="display: none;">Login/Register</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
?>
