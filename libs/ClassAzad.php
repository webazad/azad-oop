<?php
/**/
abstract class ClassAbul{
    public function __construct(){}
    public function azad(){
        echo "Hi " . __CLASS__ . ' ' . get_class($this);
    }
    public function about(){
        echo 'About';
    }
    public function __destruct(){}
}

class ClassAzad extends ClassAbul{
    
}
$azad = new ClassAzad();
$azad->azad();
