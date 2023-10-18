<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\Models\Service;


if($request->postHas('submit')){
    $id = $request->post('id');
    $title = $request->post('title');
    $s_description = $request->post('s_description');

    $validate = new Validator();
    $validate->validate('title',$title,['required','str']);
    $validate->validate('s_description',$s_description,['required','str']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('serviceedit.php');
    } else{
        $service = new Service();
        $service->update("name = '$title',description = '$s_description'",$id);

        $request->aredirect('services.php');

    }
}
