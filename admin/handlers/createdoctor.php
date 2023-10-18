<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Doctors;


if($request->postHas('submit')){
    $name = $request->post('name');
    $job = $request->post('job');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str']);
    $validate->validate('job',$job,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('doctorcreate.php');
    } else{
        $doctor = new Doctors();
        $img = new File($img);
        $image = $img->rename()->upload();
        $doctor->insert("name,job,image",
            "'$name','$job','$image'");

        $request->aredirect('doctors.php');

    }
}