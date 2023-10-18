<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Doctors;
use Clinic_two\Classes\Models\Custumers;

$data = new Doctors();
$doctors = $data->selectAll();

$images = new Custumers();
$gallerys = $images->selectAll();
?>

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-twentytwenty-image">
                    <div class="twentytwenty-container">
                        <img src="assets/img/about-img2.jpg" alt="image">
                        <img src="assets/img/about-img3.jpg" alt="image">
                    </div>

                 <!--   <div class="text">
                        <p><span>10</span> Years Experience</p>
                    </div> -->
                </div>
            </div>

          
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">Who we are</span>
                    <h2>Experienced & Specialized skin care Clinic In Kuwait</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <ul class="features-list">
                        <li><span><i class="fas fa-check"></i> Laser Treatment</span></li>
                        <li><span><i class="fas fa-check"></i> Cosmetic Filling</span></li>
                        <li><span><i class="fas fa-check"></i> filler</span></li>
                        <li><span><i class="fas fa-check"></i> Peeling</span></li>
                        <li><span><i class="fas fa-check"></i> Injections</span></li>
                        <li><span><i class="fas fa-check"></i> skin swelling</span></li>
                    </ul>

                 <!--    <div class="signature">
                        <div class="image">
                            <img src="assets/img/signature.png" alt="image">
                        </div>

                       <div class="content">
                            <h5>John Jefferson</h5>
                            <span>Chief medical officer</span>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start FunFacts Area 
<section class="funfacts-area ptb-100 bg-043d72">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="funfacts-content">
                    <span class="sub-title">Fun Facts</span>
                    <h2>Learn More About Our Success Stories</h2>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                        <div class="single-funfacts">
                            <h3><span class="odometer" data-count="858">00</span><sup>+</sup></h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                        <div class="single-funfacts">
                            <h3><span class="odometer" data-count="55">00</span><sup>+</sup></h3>
                            <p>Experts Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                        <div class="single-funfacts">
                            <h3><span class="odometer" data-count="800">00</span><sup>+</sup></h3>
                            <p>Quality Work</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                        <div class="single-funfacts">
                            <h3><span class="odometer" data-count="15">00</span><sup>+</sup></h3>
                            <p>Award Winners</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 End FunFacts Area -->

<!-- Start Doctor Area -->
<section class="doctor-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-start">
            <span class="sub-title">Our Doctors</span>
            <h2>Meet Our Qualified Doctors To Get Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <a href="#" class="btn btn-primary">Meet All <i class="flaticon-next-1"></i></a>
        </div>

        <div class="doctor-slides owl-carousel owl-theme">
            <?php foreach ($doctors as $doctor) { ?>
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
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Doctor Area -->



<!-- Start Testimonial Area -->
<section class="testimonial-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Feedback</span>
            <h2>What client says about us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>

        <div class="testimonial-slides">
            <div class="client-feedback">
                <div>
                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>
                </div>

                <button class="prev-arrow slick-arrow">
                    <i class='flaticon-back'></i>
                </button>

                <button class="next-arrow slick-arrow">
                    <i class='flaticon-next-1'></i>
                </button>
            </div>

            <div class="client-thumbnails">
                <div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/2.jpg" alt="client"></div>

                        <div class="title">
                            <h3>Jonus Nathan</h3>
                            <span>CEO at Envato</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/4.jpg" alt="client"></div>

                        <div class="title">
                            <h3>Sadio Finn</h3>
                            <span>CEO at FlatIcon</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/1.jpg" alt="client"></div>

                        <div class="title">
                            <h3>Tom Olivar</h3>
                            <span>CEO at ThemeForest</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/5.jpg" alt="client"></div>

                        <div class="title">
                            <h3>James Finn</h3>
                            <span>CEO at GitLab</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/1.jpg" alt="client"></div>

                        <div class="title">
                            <h3>John Lucy</h3>
                            <span>CEO at Linkedin</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/3.jpg" alt="client"></div>

                        <div class="title">
                            <h3>Sarah Taylor</h3>
                            <span>CEO at Twitter</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/5.jpg" alt="client"></div>

                        <div class="title">
                            <h3>James Anderson</h3>
                            <span>CEO at Facebook</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/3.jpg" alt="client"></div>

                        <div class="title">
                            <h3>Steven Smith</h3>
                            <span>CEO at EnvyTheme</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->


<?php include ('inc/footer.php')?>