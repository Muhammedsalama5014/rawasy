<?php
include ("../../app.php");
use Clinic_two\Classes\Models\Admin;

$ad = new Admin();
$ad->logout($session);

$request->aredirect('login.php');
