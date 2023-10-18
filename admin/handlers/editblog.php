<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\File;
use Clinic_two\Classes\Models\Blog;


if($request->postHas('submit')){
    $id = $request->post('id');
    $name = $request->post('name');
    $job = $request->post('description');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str']);
    $validate->validate('description',$job,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('blogedit.php');
    } else{
        $doctor = new Blog();
        if($img) {
            $img = new File($img);
            $image = $img->rename()->upload();
            $doctor->update("name = '$name',description = '$job',image = '$image'",$id);
        }
        else{
            $doctor->update("name = '$name',description = '$job'",$id);

        }
        $request->aredirect('blog.php');

    }
}
