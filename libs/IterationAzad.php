<?php
/* 
* ITERATION.
*/
class IterationAzad{
    public $name = 'Azad';
    public $age = 34;
    protected $user = 'webazad';
    private $pass = "a1a2a3a4";
    public function __contruct(){}
    public function info(){
        foreach($this as $key=>$value){
            echo $key.' => ' . $value . '<br />';
        }
    }
    public function __destruct(){}
}
//$iteration = new IterationAzad();
//$iteration->info();
