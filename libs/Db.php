<?php
/*
class GuestBookEntry{
    public $id,$name,$message,$posted,$entry;
    public function __construct(){
        $this->entry = "{$this->name} posted: {$this->message}";
    }
}
$query = $handler->query("SELECT * FROM `guestbook`");
if($query->rowCount()){
    //echo 'Results';
    //echo $query->rowCount();
    while($row=$query->fetch(PDO::FETCH_OBJ)){
        echo $row->message.'<br />';
    }
}else{
    echo 'No results';
}
*/                            
/*
$sql = "INSERT INTO `guestbook`(name, message, posted) VALUES ('Azad','Test',NOW())";
$handler->query($sql);
*/
/*
$sql = "INSERT INTO `guestbook`(name, message, posted) VALUES (:name,:message,NOW())";
$query = $handler->prepare($sql);
$query->execute(array(
    ':name' => $name,
    ':message' => $message
));
echo $handler->lastInsertedId();
*/
/*
$sql = "INSERT INTO `guestbook`(name, message, posted) VALUES (?,?,NOW())";
$query = $handler->prepare($sql);
$query->execute(array($name,$message));
*/
//$query->setFetchMode(PDO::FETCH_CLASS,'GuestBookEntry');
//$row = $query->fetch(PDO::FETCH_NUM)
//$row = $query->fetch(PDO::FETCH_ASSOC)
//$row = $query->fetchAll(PDO::FETCH_ASSOC)
//$row = $query->fetch(PDO::FETCH_OBJ)

/*
while($row=$query->fetch()){
    echo $row['message'].'<br />';
}
*/
/**
* :: TO KNOW AVAILABLE DRIVERS IN THE SYSTEM
*/
//print_r(PDO::getAvailableDrivers());
/**
* :: DATABASE CLASS
*/
abstract class Database{
    /**
    * THESE ARE ALL PROPERTIES 
    */
    protected $db_conn;
    protected $is_connected;
    public $db_name = 'oop';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_host = 'localhost';
    /**
    * DATBASE IS CONNECTED HERE IN THIS FUNCTION
    */
    public function __construct($db_host,$db_name,$db_user,$db_pass){
        
        try{
            $this->db_conn = new PDO("mysql:host=$db_host;dbname=$db_name","$db_user","$db_pass");
            //return $this->db_conn;
            $this->db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //$this->db_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }    
    }
    /**
    * TO GET A SINGLE ROW 
    */
    public function getRow($query,$params = []){ 
        try{
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
    }
    /**
    * TO GET ALL ROWS 
    */
    public function getRows($query,$params = []){
        try{
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
    }
    /**
    * TO INSERT ROW 
    */
    public function insertRow($query,$params = []){
        try{
            $stmt = $this->db_conn->prepare($query);
            $stmt = $this->db_conn->execute($params);
            return true;
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
    }
    /**
    * TO UPDATE ROW 
    */
    public function updatetRow($query,$params = []){
        try{
            $this->insertRow($query,$params = []);
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
    }
    /**
    * TO DELETE ROW 
    */
    public function deletetRow($query,$params = []){
        try{
            $this->insertRow($query,$params = []);
        }catch(PDOException $e){
            //echo 'Caught';
            //die('Sorry, database problem..');
            //echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
    }
    /**
    * TO DISCONNECT THE DATABASE
    */
    public function __deconstruct(){}
}
class Db extends Database{
    
}
/*
                            $database = new Db('localhost','oop','root','');
                            $getRow = $database->getRow("SELECT * FROM `guestbook` WHERE `id`=?",['1']);
                            $getRows = $database->getRows("SELECT * FROM `guestbook`");
                            $insertRow = $database->insertRow("INSERT INTO `guestbook`(name, message, posted) VALUES (?,?,?),['','','']");
                            $updateRow = $database->updateRow("UPDATE `guestbook` SET name=?,message=? WHERE id=?",['Aasdf','asdf','1']);
                            $deleteRow = $database->deleteRow("DELETE FROM `guestbook` WHERE id=?",['4']);
                            print_r($deleteRow);
                            */
?>