<?php 
class Model{
  protected $mysqli;
  protected $stmt;
  protected $result;

  public function __construct(){
    $this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($this->mysqli->connect_errno){
      echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
      die();
    }

  }

  public function query($query,$bind=NULL,$array=NULL){
    $this->stmt = $this->mysqli->prepare($query);
    if($bind && $array){
      $this->stmt->bind_param($bind,...array_values($array));
    }
    $this->stmt->execute();
  }


  public function affected_rows(){
    $this->result = $this->stmt->affected_rows;
    return $this->result;
  }
  public function resultset(){
    $this->result = $this->stmt->get_result();
    if($this->result){
      return $this->result->fetch_all(MYSQLI_ASSOC);
    }
    
    
  }
  public function result(){
    $this->result = $this->stmt->get_result();
    if($this->result){
      return $this->result->fetch_assoc();
    }
  }
  public function close(){
    $this->stmt->close();
    $this->mysqli->close();
  }

}