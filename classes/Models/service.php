<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Service extends Db{
    public function __construct(){
        $this->table = "services";
        $this->connect();
    }

}
