<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Gallery;
$data = new Gallery();
$gallerys = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Gallery</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Gallery</li>
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
                                    <a class="btn btn-primary" href="gallerycreate.php"> <i
                                            data-feather="plus-square"> </i>Create New Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($gallerys as $gallery) { ?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="<?=URL?>uploads/<?=$gallery['image']?>" alt=""></div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <a href="#">
                                                    <h6><?=$gallery['name']?> </h6>
                                                </a>
                                                <div class="blog-bottom-content">
                                                    <hr>
                                                    <div>
                                                        <a href="<?=URL?>admin/galleryedit.php?id=<?=$gallery['id']?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?=URL?>admin/handlers/deletegallery.php?id=<?=$gallery['id']?>" class="btn btn-danger">Delete</a>
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



