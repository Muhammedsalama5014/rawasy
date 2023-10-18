<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Gallery;


if($request->postHas('submit')){
    $id = $request->post('id');
    $title = $request->post('title');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('title',$title,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('galleryedit.php');
    } else{
        $gallery = new Gallery();
        if($img) {
            $img = new File($img);
            $image = $img->rename()->upload();

            $gallery->update("name = '$title',image = '$image'",$id);
        }
        else{
            $gallery->update("name = '$title'",$id);
        }
        $request->aredirect('gallery.php');

    }
}
