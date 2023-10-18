<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Gallery extends Db{
    public function __construct(){
        $this->table = "gallery";
        $this->connect();
    }

}
