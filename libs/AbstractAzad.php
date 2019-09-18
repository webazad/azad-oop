
<?php
/** 
* IT'S METHOD MAY HAVE BODY PARTS OR NOT.
* IT CAN NOT BE INSTANTIATED RATHER THAN EXTENDED.
* IT MAY HAVE ABSTRACT METHOD OR NON ABSTRACT METHOD.
* IT CAN BE INSTANCIATED EXTENDING IN CHILD CLASS.
* A METHOD CAN BE ABSTRACT, IF IT'S CLASS IS IS ABSTRACT.
*/
abstract class Azad {
    public $age = 23;
    public function __construct(){
        
    }
    // abstract method
    abstract public function Name();
    // non abstract method
    public function Age(){
        return $this->age;
    }
}
class AbstractAzad extends Azad{
    public function __function(){
        parent::__contruct();
    }
    public function Name(){
        return parent::age();
    }
    public function Another(){
        
    }
}
$user = new AbstractAzad();

