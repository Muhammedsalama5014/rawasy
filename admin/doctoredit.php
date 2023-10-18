<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Doctors;
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id = 1;
}
$data = new Doctors();
$doctor = $data->selectId($id);
?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Doctor Edit</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php"><i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Doctor</li>
                            <li class="breadcrumb-item active">Doctor Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <?php include ('inc/errors.php')?>
                            <form method="post" action="<?=URL?>admin/handlers/editdoctor.php" enctype="multipart/form-data" class="form theme-form projectcreate">
                                <input type="hidden" name="id" value="<?=$doctor['id']?>">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Doctor Name</label>
                                            <input class="form-control" name="name" type="text" value="<?=$doctor['name']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Job</label>
                                            <input class="form-control" name="job" type="text" value="<?=$doctor['job']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Image</label>
                                            <input class="form-control" name="img" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-end">
                                            <button type="submit" name="submit" class="btn btn-danger" href="#">Add</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
<?php include ('inc/footer.php')?>