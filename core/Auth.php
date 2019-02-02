<?php

require_once __DIR__.'/Session.php'; 

class Auth extends Session {
    public function __construct(){
        parent::__construct();
    }

    public function login($user){
        
        return $this->set('user', $user);
    }

    public function id(){
        if($user = $this->get('user')){
            return $user['id'];
        }
    }

    public function logout(){
        $this->distroy('user');
    }

    public function user(){
        return $this->get('user');
    }

    public function isGuest(){
        return $this->hasKey('user') == false;
    }

    public function isUser(){
        return $this->hasKey('user') == true;
    }
}