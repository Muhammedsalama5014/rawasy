<?php
require_once ('../../app.php');
use Clinic_two\Classes\Models\Service;

if($request->getHas('id')){
    $id = $request->get('id');
    $doctor = new Service();
    $doctor->delete($id);

    $request->redirect('../services.php');
}

