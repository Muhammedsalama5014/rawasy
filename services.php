<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Service;
$data = new Service();
$services = $data->selectAll();
?>

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Area -->
<section class="services-area ptb-100">
    <div class="container">
        <div class="row m-0">
            <?php foreach ($services as $service) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="single-services-box">
                    <h3 style="padding-left:10px"><img src="<?=URL.'assets/img/skincare.png'?>" width="50" height="50"> <?=$service['name']?></h3>
                    <p style="padding-top: 10px"><?=$service['description']?></p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-next"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Services Area -->




<?php include ('inc/footer.php')?>