<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Blog;
if($request->getHas('id')){
    $id= $request->get('id') ;
    $data = new Blog();
    $blogs = $data->selectId($id);
}else{
    $request->redirect('blog.php');
}

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

            <div class="offset-lg-2 col-lg-8 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="<?=URL?>uploads/<?=$blogs['image']?>" alt="image"></a>

                        <div class="date"><i class="far fa-calendar-alt"></i><?=$blogs['date']?></div>
                    </div>

                    <div class="post-content">
                        <h3><a href="#"><?=$blogs['name']?></a></h3>
                        <p><?=$blogs['description']?></p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Blog Area -->
<?php include ('inc/footer.php')?>