<?php
class Session {

    protected $session;

    public function __construct(){
        
        if (!session_id()) {
            session_start();
        }

        $this->session = $_SESSION;
    }

    public function hasKey($key){
        return isset($this->session[$key]);
    }

    public function set($key, $value){
       
        return $this->session[$key] = $value;
    }

    public function get($key){
        
        if($this->hasKey($key)){
            return $this->session[$key];
        }
    }

    public function distroy($key){

        if($this->hasKey($key)){
            unset($this->session[$key]);
        }
        session_destroy();
    }
}