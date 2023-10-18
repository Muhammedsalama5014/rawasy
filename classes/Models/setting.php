<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Setting extends Db{
    public function __construct(){
        $this->table = "setting";
        $this->connect();
    }
}
