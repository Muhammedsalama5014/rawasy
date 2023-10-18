<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Service;
use Clinic_two\Classes\Models\Blog;
use Clinic_two\Classes\Models\Doctors;
use Clinic_two\Classes\Models\Custumers;
use Clinic_two\Classes\Models\Appointment;
use Clinic_two\Classes\Validation\Validator;

$data = new Doctors();
$doctors = $data->selectAll();

$images = new Custumers();
$gallerys = $images->selectAll();

$datat = new Blog();
$blogs = $datat->selectAll();

$datath = new Service();
$services = $datath->selectAllWithLimit();

$datafo = new Service();
$serviceswith = $datafo->selectAll();

if($request->postHas('submit')){
    $name = $request->post('name');
    $serviceapp = $request->post('service');
    $phone = $request->post('phone');
    $email = $request->post('email');
    $gender = $request->post('gender');
    $calander = $request->post('calander');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str','max']);
    $validate->validate('service',$serviceapp,['required','str','max']);
    $validate->validate('email',$email,['required','email','max']);
    $validate->validate('phone',$phone,['required','numeric','max']);
    $validate->validate('gender',$gender,['required']);
    $validate->validate('calander',$calander,['required']);

    $date = date('Y-m-d', time());

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
    }
    if($calander >= $date){
        $data = new Appointment();
        $data->insert("name,email,phone,service,gender,calendar","'$name','$email','$phone','$serviceapp','$gender','$calander'");
    }
    else{
        $session->set("date error" , 'the date should be in present date');
    }
}
?>

<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    <div class="main-banner item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span class="sub-title">Doctor’s for health</span>
                        <h1>Modern and Latest Technology Treatment</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna Quis ipsumpsum.</p>
                        <div class="btn-box">
                            <div style="width:50px;height: 50px;"></div>

                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">Watch
                                Now <span><i class="flaticon-play-button"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1>Rawasy Medical Centre 8th Floor Allure Clinic</h1>
                        <div class="btn-box">
                            <a href="#" class="btn btn-primary">Contact Us <i class="flaticon-next"></i></a>

                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">Watch
                                Now <span><i class="flaticon-play-button"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->


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

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->



<!-- Start Services Area -->
<section class="services-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="services-title-content">
                    <span class="sub-title">Services</span>
                    <h2>What We Offer for You to Our Patients to solve Cure</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum rices gravida.</p>

                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> Scientific Skills For getting a better result</li>
                        <li><i class="fas fa-check"></i> Communication Skills to getting in touch</li>
                        <li><i class="fas fa-check"></i> A Career Overview opportunity Available</li>
                    </ul>

                    <a href="#" class="btn btn-primary">Learn More <i class="flaticon-next"></i></a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row m-0">
                    <?php foreach ($services as $service) {?>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="single-services-box">
                            <h3 style="padding-left:10px"><img src="<?=URL.'assets/img/skincare.png'?>" width="50" height="50"> <?=$service['name']?></h3><br>
                            <p><?=$service['description']?></p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Why Choose Us Area
<section class="why-choose-us-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="why-choose-us-content">
                    <div class="content">
                        <span class="sub-title">Why You Choose Us</span>
                        <h2>What we do why we are exceptional than others</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>

                        <ul class="features-list">
                            <li>
                                <div>
                                    <i class="flaticon-doctor"></i>
                                    <span>Professional Staff</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </li>

                            <li>
                                <div>
                                    <i class="flaticon-laboratory"></i>
                                    <span>Oral surgery</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </li>

                            <li>
                                <div>
                                    <i class="flaticon-tooth-3"></i>
                                    <span>Crowns lab</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </li>

                            <li>
                                <div>
                                    <i class="flaticon-baby-boy"></i>
                                    <span>Kids Dentist</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="divider"></div>
                <div class="why-choose-us-slides owl-carousel owl-theme">
                    <div class="why-choose-us-image bg1">
                        <img src="assets/img/why-choose-img1.jpg" alt="image">
                    </div>

                    <div class="why-choose-us-image bg2">
                        <img src="assets/img/why-choose-img2.jpg" alt="image">
                    </div>

                    <div class="why-choose-us-image bg3">
                        <img src="assets/img/why-choose-img3.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 Start Why Choose Us Area -->

<!-- Start Doctor Area -->
<section class="doctor-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Doctors</span>
            <h2>Meet Our Qualified Doctors To Get Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
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

<!-- Start CTA Area
<section class="cta-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="cta-content">
            <div class="icon">
                <i class="flaticon-business-and-finance"></i>
            </div>
            <h2>Emergency Medical Care 24/7</h2>
            <p>With access to 24 hour emergency assistance, It’s so important you can continue to help others.</p>
            <a href="#" class="call-us"><i class="flaticon-phone-call"></i> 342-875-0564</a>
        </div>
    </div>
</section>
 End CTA Area -->

<!-- Start Feedback Area -->
<section class="feedback-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Feedback</span>
            <h2>What Customer Saying About us</h2>
        </div>

        <div class="feedback-slides owl-carousel owl-theme">
            <div class="single-feedback-item">
                <p>“While The Lovely Valley Teems With Vapour Around Me, And The Meridian Sun Strikes The Upper Surface
                    Of The Impenetrable Foliage Of My Trees. A Wonderful Serenity Has Taken.”</p>

                <div class="client-info">
                    <h4>James Anderson</h4>
                    <span>Teeth Washing</span>
                </div>
            </div>

            <div class="single-feedback-item">
                <p>“While The Lovely Valley Teems With Vapour Around Me, And The Meridian Sun Strikes The Upper Surface
                    Of The Impenetrable Foliage Of My Trees. A Wonderful Serenity Has Taken.”</p>

                <div class="client-info">
                    <h4>David Warner</h4>
                    <span>Teeth Washing</span>
                </div>
            </div>

            <div class="single-feedback-item">
                <p>“While The Lovely Valley Teems With Vapour Around Me, And The Meridian Sun Strikes The Upper Surface
                    Of The Impenetrable Foliage Of My Trees. A Wonderful Serenity Has Taken.”</p>

                <div class="client-info">
                    <h4>Jos Butler</h4>
                    <span>Teeth Washing</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback Area -->



<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Blog</span>
            <h2>Read Our Latest Articles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>

        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="#"><img src="<?=URL?>uploads/<?=$blog['image']?>" alt="image"></a>

                            <div class="date"><i class="far fa-calendar-alt"></i><?=$blog['date']?></div>
                        </div>

                        <div class="post-content">
                            <h3><a href="#"><?=$blog['name']?></a></h3>
                            <p><?=substr($blog['description'], 0, 200)?>......</p>

                            <a href="<?=URL . "blog-details.php?id=" . $blog['id'];?>" class="read-more-btn">Read More <i class="flaticon-next-1"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->
<?php include ('inc/footer.php')?>