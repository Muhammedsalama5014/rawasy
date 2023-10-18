<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Custumers;
$data = new Custumers();
$custumers= $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Custumers</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Custumers</li>
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
                                    <a class="btn btn-primary" href="custumercreate.php"> <i
                                            data-feather="plus-square"> </i>Create New Customers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($custumers as $gallery) { ?>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-12 col-12"><img class="img-fluid sm-100-w" src="<?=URL?>uploads/<?=$gallery['image']?>" alt=""></div>
                                    </div>
                                    <a href="<?=URL?>admin/handlers/deletecustumer.php?id=<?=$gallery['id']?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php include ('inc/footer.php')?>



