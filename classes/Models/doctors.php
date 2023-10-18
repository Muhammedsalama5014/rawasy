<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Doctors extends Db{
    public function __construct(){
        $this->table = "doctors";
        $this->connect();
    }
}
