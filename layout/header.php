<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- header section start-->
    <header class="header">
        <div class="container">
            <div class="row">
            <nav class="navbar navbar-expand-lg header-navbar">
                <div class="container">
                    <span class="fs-3 text-white">furniture</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end ">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="shop.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="signup.php"><i class="fa-solid fa-user fs-4 text-white"></i></a>
                            </li>
                            <?php
                            session_start();
                            ?>
                            <li class="nav-item">
                                <a href="cart.php">
                                    <span id="cardcount"><?= count($_SESSION);?></span>    
                                <i class="fa-solid fa-cart-shopping fs-4 text-white"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </div>
    </header>
    <!-- header section end-->