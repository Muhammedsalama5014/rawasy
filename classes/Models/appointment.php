<?php
namespace Clinic_two\Classes\Models;
use Clinic_two\Classes\Db;
class Appointment extends Db{
    public function __construct(){
        $this->table = "appointment";
        $this->connect();
    }

}
