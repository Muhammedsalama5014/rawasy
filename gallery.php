<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Gallery;
$data = new Gallery();
$gallerys = $data->selectAll();
?>

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Research</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Research</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Research Area -->
<section class="research-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <?php foreach ($gallerys as $gallery) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-research-box">
                    <div style="background-image: url('<?=URL?>uploads/<?=$gallery['image']?>');" class="research-image"></div>
                    <a href="#" class="research-link">
                        <div style="background-image: url('<?=URL?>uploads/<?=$gallery['image']?>');" class="research-img-hover"></div>
                    </a>
                    <div class="research-info">
                        <h3 class="title"><a href="#"><?=$gallery['name']?></a></h3>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Research Area -->




<?php include ('inc/footer.php')?>