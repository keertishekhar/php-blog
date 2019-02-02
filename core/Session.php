<?php
class Session {

    public function __construct(){
    
        if (!session_id()) {
           session_start();
        }
    }

    public function hasKey($key){
        return isset($_SESSION[$key]);
    }

    public function set($key, $value){
       
        return $_SESSION[$key] = $value;
    }

    public function get($key){
        
        if($this->hasKey($key)){
            return $_SESSION[$key];
        }
    }

    public function distroy($key){

        if($this->hasKey($key)){
            unset($_SESSION[$key]);
        }
        session_destroy();
    }
}