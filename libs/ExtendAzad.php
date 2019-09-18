<?php
/**
* :: Parent class may be normal class or an abstract class, 
* :: if final class, then can not be extended 
*/
abstract class Character{
    public $name = 'Azad';
    public $age = 34;
    public function __construct(){
        $this->name;
        $this->age;
    }
    public function getName(){
        echo $this->name;
    }
    public function getAge(){
        echo $this->age;
    }    
}
class Human extends Character{
    public function __construct(){
        parent::__contruct();
    }
    // parent method can be overridden
    public function getAge(){
        echo $this->age;
    }
      
}
//$human = new Human();
?>