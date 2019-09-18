<?php
/* 
* TRAIT EXAMPLE.
*/
trait Java{
    public function about(){
        echo 'I love Java';
    }
}
trait Php{
    public function php(){
        echo 'I love php';
    }
}
class TraitAzad{
    use Java,Php;
    public function __construct(){
        //echo 'Info';
    }
    public function about(){
        echo 'I love Java and trait';
    }
}
class Loging{
    public function __construct(){
        echo 'Loging';
    }
}
//$trait = new TraitAzad();
//                            $trait->php();
  //                          $trait->about();

