<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Blog;
$data = new Blog();
$doctors = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Blog</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid user-card">
                <div class="row">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 p-0"></div>
                                <div class="col-md-6 p-0">
                                    <div class="form-group mb-0 me-0"></div>
                                    <a class="btn btn-primary" href="blogcreate.php"> <i
                                            data-feather="plus-square"> </i>Create New blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($doctors as $doctor) { ?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="<?=URL?>uploads/<?=$doctor['image']?>" alt=""></div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <a href="#">
                                                    <h6><?=$doctor['name']?> </h6>
                                                </a>
                                                <p><?=$doctor['date']?></p>
                                                <p><?=$doctor['description']?></p>
                                                <div class="blog-bottom-content">
                                                    <div>
                                                        <a href="<?=URL?>admin/blogedit.php?id=<?=$doctor['id']?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?=URL?>admin/handlers/deleteblog.php?id=<?=$doctor['id']?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php include ('inc/footer.php')?>



