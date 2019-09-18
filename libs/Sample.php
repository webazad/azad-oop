<?php
/**
* :: OBJECT ORIENTED PROGRAMMING.
* :: SAMPLE CLASS
*/
abstract class Demo{
    public static $name = 'Azad';
    public function __construct(){
        echo self::$name;
    }
}
class Sample extends Demo{
    public static function azad(){
        echo parent::$name;
    }
    public function setAzad($name){
        parent::$name = $name;
    }
    public function getAzad(){
        echo parent::$name;
    }
}