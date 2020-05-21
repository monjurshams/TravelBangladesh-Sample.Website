<?php 
class HomeModel extends Model{
  public function index(){
    $query = "SELECT * from spots order by id desc limit 3";
    $this->query($query);
    return $this->resultset();
    $this->close();
  }
}