<?php
include ("../../app.php");
use Clinic_two\Classes\Validation\Validator;
use Clinic_two\Classes\Models\Admin;
use Clinic_two\Classes\File;

if($request->postHas('submit')){
    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');
    $profile = $request->files('profile');

    $validate = new Validator();
    $validate->validate('name',$name,['str','max']);
    $validate->validate('email',$email,['email','max']);
    $validate->validate('password',$password,['str','max']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('setting.php');
    } else{
        $ad = new Admin();
        if (! empty($password)){
            if($profile){
                $file = new File($profile);
                $imgName = $file->rename()->upload();
                $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                $ad->update("name_admin = '$name',email = '$email', `password` = '$hashedPass',profile = '$imgName'",$session->get('adminId'));
            }
            else{
                $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                $ad->update("name_admin = '$name',email = '$email', `password` = '$hashedPass'",$session->get('adminId'));
            }

        } else{
            if($profile){
                $file = new File($profile);
                $imgName = $file->rename()->upload();
                $ad->update("name_admin = '$name',email = '$email',profile = '$imgName'",$session->get('adminId'));
            }
            else{
                $ad->update("name_admin = '$name',email = '$email'",$session->get('adminId'));
            }
        }

        $request->aredirect('handlers/handle-logout.php');
    }
}
