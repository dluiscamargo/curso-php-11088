<?php

require_once '../../core/config.php';

class Users extends Dataset{    
    function __construct(){
        parent::__construct();
        
        $this->sTable   =  "users";
        $this->asFields = [ 
           "user_id",
           "user_login",
           "user_email", 
           "user_password"];
        
        $this->abPrimary = [ "user_id" => true ];
    } // function __construct(){ 
    public function insertNewUser($sLogin, $sEmail, $sPassword) {
        $asColumns= [
            $this->asFields[1] => "$sLogin",
            $this->asFields[2] => "$sEmail",
            $this->asFields[3] => "$sPassword",
        ];
        $this->insert($asColumns);
    }
 } // class Products extends Dataset{

