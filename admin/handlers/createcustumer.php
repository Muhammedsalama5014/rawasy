<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Custumers;


if($request->postHas('submit')){
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('custumercreate.php');
    } else{
        $service = new Custumers();
            $img = new File($img);
            $image = $img->rename()->upload();

            $service->insert("image",
                "'$image'");

        $request->aredirect('custumer.php');

    }
}

