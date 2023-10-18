<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Gallery;


if($request->postHas('submit')){
    $title = $request->post('title');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('title',$title,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('gallerycreate.php');
    } else{
        $gallery = new Gallery();
            $img = new File($img);
            $image = $img->rename()->upload();

        $gallery->insert("name,image",
                "'$title','$image'");

        $request->aredirect('gallery.php');

    }
}

