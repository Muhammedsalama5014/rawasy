<?php
require_once ('../../app.php');
use Clinic_two\Classes\Models\Blog;

if($request->getHas('id')){
    $id = $request->get('id');
    $doctor = new Blog();
    $doctor->delete($id);

    $request->redirect('../blog.php');
}

