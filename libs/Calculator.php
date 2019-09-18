<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Calculator{
    public function __construct(){}
    public function getAdd($a,$b){
        echo $a+$b;
    }
    public function getSub($a,$b){
        echo $a-$b;
    }
    public function getDiv($a,$b){
        echo $a/$b;
    }
    public function getMul($a,$b){
        echo $a*$b;
    }
}
//$calculator = new Calculator();
?>
