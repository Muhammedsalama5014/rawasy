<?php
require_once ('../../app.php');
use Clinic_two\Classes\Models\Doctors;

if($request->getHas('id')){
    $id = $request->get('id');
    $doctor = new Doctors();
    $doctor->delete($id);

    $request->redirect('../doctors.php');
}

