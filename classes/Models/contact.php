<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Contact extends Db{
    public function __construct(){
        $this->table = "contact";
        $this->connect();
    }
}
