<?php
require_once ('../../app.php');
use Clinic_two\Classes\Models\Gallery;

if($request->getHas('id')){
    $id = $request->get('id');
    $gallery = new Gallery();
    $gallery->delete($id);

    $request->redirect('../gallery.php');
}

