<?php
require_once ('../../app.php');
use Clinic_two\Classes\Models\Custumers;

if($request->getHas('id')){
    $id = $request->get('id');
    $doctor = new Custumers();
    $doctor->delete($id);

    $request->redirect('../custumer.php');
}

