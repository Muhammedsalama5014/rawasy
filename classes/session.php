<?php
namespace Clinic_two\Classes;
class Session{

    public function __construct(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }
    public function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public function get($key){
        return $_SESSION[$key];
    }

    public function has($key){
        return isset($_SESSION[$key]);
    }

    public function remove($key){
        unset($_SESSION[$key]);
    }

    public function destroy(){
        Session_destroy();
    }
}
