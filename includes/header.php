<?php
define("BASE_URL", "http://localhost/Hotel/");

include "includes/arrays.php";
// include "bin.txt";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo TITLE; ?> | Mountain Luxury Hotel and Resort</title>
    <!-- swiper slider css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- font-awesome icons css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- custom css -->
    <link rel=stylesheet href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
</head>

<body>
    <!-- header -->
    <header class="header_area">
        <nav class="navbar navbar-expand-md p-0">
            <div class="container">
                <a href="./" class="navbar-brand">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h1>THE ENCODED</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" style="color:#ffffff;"></i>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="./" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL; ?>about.php" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL; ?>rooms.php" class="nav-link">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL; ?>gallery.php" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL; ?>contact.php" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <?php 
                            $myfile = fopen("bin.txt", "r") or die("Unable to open file!");
                            if(fread($myfile,filesize("bin.txt")) == "0") {
                            ?>
                            <a href="<?php echo BASE_URL; ?>admin-login.php" class="nav-link">Login</a>
                            <?php
                            } else {
                                ?>
                                <a href="<?php echo BASE_URL; ?>logout.php" class="nav-link">Logout</a>
                                <?php
                            }
                            fclose($myfile); 
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>