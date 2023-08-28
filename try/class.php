<?php

define("flexifile", "sample");
 
 class DataImport {
    private $server = "mysql:host=localhost;dbname=" . flexifile;
    private $user = "root";
    private $password = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function connect(){
      try {
         $this->con = new PDO($this->server, $this->user, $this->password, $this->options);
         return $this->con;

      } catch(PDOException $e) {
         echo "There is some problem in the connection :" . $e->getMessage();

      }

    }
   
    public function insert_data($array){

      $surname = trim($array[0]);
      $firstname= trim($array[1]);
      $middlename= trim($array[2]);

      try {
         $connection = $this->connect();
         $stmt = $connection->prepare("INSERT INTO sample (surname,firstname,middlename) Value (?,?,?)");
         $stmt->execute([$surname, $firstname, $middlename]);
         //$id = $connection->lastInsertId();
         return "success";
      } catch (PDOException $error) {
         echo "There is some problem in inserting data: " . $error->getMessage();        
      }
      

    }
    
   }

?>