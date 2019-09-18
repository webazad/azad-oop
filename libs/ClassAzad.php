<?php

/* 

*/
abstract class ClassAbul{
    public function azad(){
        echo "Azad ".__CLASS__. ' '.get_class($this);
    }
    public function about(){
        echo 'About';
    }
}

class ClassAzad extends ClassAbul{
    
}
//$azad = new ClassAzad();
//                            $azad->azad();
