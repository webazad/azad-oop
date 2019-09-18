<?php
/* 
* final KEYWORD WILL STOP EXTENDING THE CLASS.
*/
class Azad{
    const NAME = 'Azad';
    public static $user = 'Azad';
    public function __construct(){
        
    }
    public static function foo(){
        echo 'Foo';
    }
    public static function name(){
        // THE WAY TO WRITE CONSTANT VARIABLE
        echo Azad::NAME;
        // THE WAY TO WRITE STATIC VARIABLE
        echo self::$user;
        // THE WAY TO WRITE STATIC METHOD
        echo self::foo();
    }
    /* 
    * final KEYWORD WILL STOP OVERRIDING method EXTENDING IN THE CHILD CLASS.
    */
    public final function age(){
        
    }
}
//Azad::name();