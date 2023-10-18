<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Doctors;


if($request->postHas('submit')){
    $id = $request->post('id');
    $name = $request->post('name');
    $job = $request->post('job');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str']);
    $validate->validate('job',$job,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('doctoredit.php');
    } else{
        $doctor = new Doctors();
        if($img) {
            $img = new File($img);
            $image = $img->rename()->upload();
            $doctor->update("name = '$name',job = '$job',image = '$image'",$id);
        }
        else{
            $doctor->update("name = '$name',job = '$job'",$id);

        }
        $request->aredirect('doctors.php');

    }
}
