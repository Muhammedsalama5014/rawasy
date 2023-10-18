<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Service;


if($request->postHas('submit')){
    $title = $request->post('title');
    $s_description = $request->post('s_description');

    $validate = new Validator();
    $validate->validate('title',$title,['required','str']);
    $validate->validate('s_description',$s_description,['required','str']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('servicecreate.php');
    } else{
        $service = new Service();

            $service->insert("name,description",
                "'$title','$s_description'");

        $request->aredirect('services.php');

    }
}

