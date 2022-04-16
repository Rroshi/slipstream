<?php 
class Ngarkoni{
    private $host="localhost";
    private $user="id16237526_db1";
    private $pass="Qwertyuiop123.";
    private $db="id16237526_db";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function ngarko($data){
        $emri=$data['emri'];
        $mbiemri=$data['mbiemri'];
        $email=$data['email'];
        $password=$data['password'];
        $gender=$data['gender'];
        $birthday=$data['birthday'];


      if (isset($_POST['dergoni'])) {
  
         $query="insert into ngarkoni(emri, mbiemri, email, password, gender, birthday) Values('".$emri."','".$mbiemri."','".$email."','".$password."','".$gender."', '".$birthday."')";
       $data= $this->mysqli->query($query);
       
       }
       
    }
}

?>