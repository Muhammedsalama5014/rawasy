<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Blog;
$data = new Blog();
$blogs = $data->selectAll();
?>


<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
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
                        <p><?=substr($blog['description'] , 0 , 200)?>........</p>

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