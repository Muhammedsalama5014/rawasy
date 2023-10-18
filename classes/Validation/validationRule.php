<?php
namespace Clinic_two\Classes\Validation;

interface ValidationRule {
    public function check($name,$value);
}