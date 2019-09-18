<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClassMethodCheckAzad{
    public $entry;
    public function __construct(){
        $this->entry;
    }
    public function isThere(){
        if(class_exists('People')){
            echo 'class found';
        }else{
            echo 'class not found';
        }
        if(method_exists($object_name,'method_name')){
            echo 'method found';
        }else{
            echo 'method not found';
        }
    }
}