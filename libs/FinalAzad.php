<?php
/* 
* final KEYWORD WILL STOP EXTENDING THE CLASS.
*/
final class FinalAzad{
    const NAME = 'Azad';
    public static $user = 'User';
    public function __construct(){}
    public static function name(){
        // THE WAY TO WRITE CONSTANT VARIABLE
        echo Azad::NAME;
        // THE WAY TO WRITE STATIC VARIABLE
        echo self::$user;
    }
    /* 
    * final KEYWORD WILL STOP OVERRIDING method EXTENDING IN THE CHILD CLASS.
    */
    public final function age(){
        // THE WAY TO WRITE CONSTANT VARIABLE
        echo Azad::NAME;
        // THE WAY TO WRITE STATIC VARIABLE
        echo self::$user;
    }
    public function __destruct(){}
}
//FinalAzad::name();
//FinalAzad::NAME;
//FinalAzad::$user;
