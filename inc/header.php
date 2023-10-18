<?php include ('app.php');
use Clinic_two\Classes\Models\Setting;
$data = new Setting();
$setting = $data->selectId(1);
?>
<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- FontAwesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- TwentyTwenty Min CSS -->
    <link rel="stylesheet" href="assets/css/twentytwenty.min.css">
    <!-- Slick Min CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <script src="https://kit.fontawesome.com/f5a6d2469f.js" crossorigin="anonymous"></script>

    <title><?=$setting['name']?></title>

    <link rel="icon" type="image/png" href="<?=URL?>uploads/<?=$setting['icon']?>">
</head>

<body>



<!-- Start Header Area -->
<header class="header-area">

    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <ul class="header-contact-info">
                        <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 19:00</li>
                        <li><i class="fas fa-phone"></i> <a href="#"><?=$setting['phone']?></a></li>
                        <li><i class="far fa-paper-plane"></i> <a href="mailto:<?=$setting['email']?>"><?=$setting['email']?></a>
                        </li>
                        <li class="btn1"><a href="ar/index.php">Arabic</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="header-right-content">
                        <ul class="top-header-social">
                            <li><a href="https://www.facebook.com/profile.php?id=100089688574454" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" target="_blank"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
                            <li><a href="https://www.instagram.com/alrawasy.8thfloor/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="klev-responsive-nav">
            <div class="container">
                <div class="klev-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="<?=URL?>uploads/<?=$setting['logo']?>" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="klev-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?=URL?>uploads/<?=$setting['logo']?>" alt="logo" width="250px">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</i></a></li>

                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>

                            <li class="nav-item"><a href="services.php" class="nav-link">Services</i></a></li>

                            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</i></a></li>

                            <li class="nav-item"><a href="team.php" class="nav-link active">Doctor</a></li>

                            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>

                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn flaticon-search"></i>
                                <i class="close-btn flaticon-cross"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit"><i class="flaticon-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                          <!--  <div class="burger-menu">
                                <i class="flaticon-menu"></i>
                            </div>-->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

</header>
<!-- End Header Area -->



<!-- Sidebar Modal -->
<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer
                    experience are the heart of successful communication. No fake products and services. The customer is
                    king, their lives and needs are the inspiration.</p>
            </div>
        </div>

        <div class="sidebar-contact-area">
            <div class="sidebar-contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:<?=$setting['phone']?>"><?=$setting['phone']?></a>
                        <span>OR</span>
                        <a href="mailto:<?=$setting['email']?>"><?=$setting['email']?></a>
                    </h2>

                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="close-btn sidebar-modal-close-btn"><i class="flaticon-cross"></i></span>
    </div>
</div>
<!-- End Sidebar Modal -->