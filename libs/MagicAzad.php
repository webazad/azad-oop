<?php
class MagicAzad{
    // MAGIC METHOD ONE
    private $_name;
    /*
    public function __construct($foo){
        $this->foo = $foo;
    }
    */
    // MAGIC METHOD TWO
    public function __set($property,$value){
        $this->name = $value;
    }
    // MAGIC METHOD THREE
    public function __get($property){
        return "My $property has changed to $this->name";
    }
    // MAGIC METHOD FOUR
    /*
    public function __clone(){
        echo 'From clone';
    }
    */
    /*
    // MAGIC METHOD FIVE
    public function __call($name,$arg_array){
        echo 'Call method has '.$name .'<br />'. implode(',',$arg_array) .  '<br />';
    }
    // MAGIC METHOD SIX
    public static function __callStatic($name,$arg_array){
        echo 'Callstatic method has '.$name.'<br />' . implode(',',$arg_array) .  '<br />';
    }
    */
    // MAGIC METHOD SEVEN
    /*
    public function __isset($name){
        return isset($this->name);
    }
    */
    //// MAGIC METHOD EIGHT
    //public function __unset(){}
    // MAGIC METHOD NINE
    //public function __sleep(){}
    // MAGIC METHOD TEN
    //public function __wakeup(){}
    /*
    // MAGIC METHOD ELEVEN
    public function __toString(){
        return $this->foo;
    }
    */
    // MAGIC METHOD TWELVE
    /**
    public function __invoke($var){
        echo 'You can not do that man.';
    }
    */
    // MAGIC METHOD THIRTEEN
    /**
    public function __set_state(){}
    */
    // MAGIC METHOD FOURTEEN
    //public function __debugInfo(){}
    /*
    // MAGIC METHOD FIFTEEN
    public function __destruct(){
        echo 'Destruct';
        mysql_close();
        unset($this->user);
    }
    */
    
}
/*
$magic = new MagicAzad();
$magic->runTest('i have 4');
$magic::runTest('I am from callstatic brother');
*/
/*
it is from the __toString() magic method
$magic = new MagicAzad();
echo $magic;
*/
/*
it is from the __clone() magic method
$magic = new MagicAzad();
$magicAzad = clone $magic;
*/
/*
it is from the __invoke() magic method
$magic = new MagicAzad();
$magic(1);
*/
