<?php
/* 
* TYPE HINTING
*/
class Hinting{
    public $value;
    public function portfolio(Type $a){
        $this->value = $a;
        echo $this->value->about();
    }    
}
/**
$type = new Type();
$hinting = new Hinting();
$hinting->portfolio($type);
*/

