<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Doctors;
$data = new Doctors();
$doctors = $data->selectAll();
?>

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

        <div class="sidebar-instagram-feed">
            <h2>Instagram</h2>

            <ul>
                <li><a href="#"><img src="assets/img/blog-image/1.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/2.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/3.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/4.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/5.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/6.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/7.jpg" alt="image"></a></li>
                <li><a href="#"><img src="assets/img/blog-image/8.jpg" alt="image"></a></li>
            </ul>
        </div>

        <div class="sidebar-contact-area">
            <div class="sidebar-contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:+0881306298615">+088 130 629 8615</a>
                        <span>OR</span>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b6ded3dadad9f6dddad3c0da98d5d9db"><span
                                    class="__cf_email__" data-cfemail="98f0fdf4f4f7d8f3f4fdeeb6fbf7f5">[email&#160;protected]</span></a>
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

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Team</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Doctor Area -->
<section class="doctor-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($doctors as $doctor) { ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-doctor-box">
                    <div class="image">
                        <img src="<?=URL?>uploads/<?=$doctor['image']?>" alt="image">
                    </div>

                    <div class="content">
                        <h3><?=$doctor['name']?></h3>
                        <span><?=$doctor['job']?></span>

                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Doctor Area -->



<?php include ('inc/footer.php')?>