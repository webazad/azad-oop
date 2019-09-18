<?php
/**
* IT HAS METHODS WITHOUT BODYPARTS.
* IT CAN NOT BE INSTANTIATED RATHER THAN IMPLEMENTED
* IT CAN BE IMPLEMENTED IN A CLASS
* IT CAN BE IMPLEMENTED IN MULTIPLE CLASSES
*/
interface Azad{
    public function Name();
}
/**
* A CLASS CAN IMPLEMENT A INTERFACE OR MULTIPLE INTERFACES
*/
interface Abul{
    public function Talk();
}
class interfaceAzad implements Azad, Abul{
    public function __construct(){
        
    }
    public function name(){
        
    }
    public function talk(){
        
    }
}
