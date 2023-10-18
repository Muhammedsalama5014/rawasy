<?php
namespace Clinic_two\Classes\Validation;
class Numeric implements ValidationRule{
    public function check($name, $value)
    {
        if(!is_numeric($value)){
            return "$name must contain only numbers";
        }
        return false;
    }
}
