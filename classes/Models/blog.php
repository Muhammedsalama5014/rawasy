<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Blog extends Db{
    public function __construct(){
        $this->table = "blog";
        $this->connect();
    }

}
