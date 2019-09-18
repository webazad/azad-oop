<?php
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
class ChainMethod{
    public $price;
    public function __construct(){}
    public function info($data){
        $this->price = $data;
        return $this;
    }
    public function word($data){
        $this->price = $data;
        return $this;
    }
    public function walk($data){
        $this->price = $data;
    }
    public function __destruct(){}
}
// $chainmethod = new ChainMethod();
// $chainmethod->info();
// $chainmethod->info()->word()->walk();