<?php

require_once('Database.php');
class User{
    public $link = '';
    public function __construct(){
        $db_connection = new Db();
        $this->link = $db_connection;
        return $this->link;
    }
    public function registerUser(){
        
    }
    public function loginUser(){
        echo 'LoginIser';
    }
    public function deleteUser(){
        
    }
    public function updateUser(){
        
    }
    public function __deconstruct(){
        
    }
}
//$user = new User();