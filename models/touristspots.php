<?php 
class TouristModel extends Model{
  public function index(){
    $query = "SELECT * from spots";
    
    $this->query($query);
    return $this->resultset();
    $this->close();
  }

  public function add(){
    if(isset($_POST['add-submit'])){
      $imgfile=$_FILES["image"]["name"];
      $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");
      if(!in_array($extension,$allowed_extensions)){
        Message::setMsg('Invalid Image Format','error');
        return;
      }
      $imageName = time().$extension;
      $target = $_SERVER['DOCUMENT_ROOT']."/travelbd/asset/img/spot/".basename($imageName);
      move_uploaded_file($_FILES['image']['tmp_name'], $target);

      $name = $_POST['name'];
      $description = $_POST['description'];

      $query = 'insert into spots(name,description,image) values(?,?,?)';
      $bind = 'sss';
      $this->query($query,$bind,[$name,$description,$imageName]);
      $row = $this->affected_rows();
      $this->close();
      if($row){
        Message::setMsg('Tourist Spot Added Successfully','success');
      }
    }
  }


  public function delete(){
      $id = $_GET['id'];
      $selectQuery = "select image from spots where id=$id";
      $this->query($selectQuery);
      $imageName = $this->result();
      $query = "delete from spots where id=$id";
      $image=$imageName['image'];
      $imagePath = $_SERVER['DOCUMENT_ROOT'].'/travelbd/asset/img/spot/'.$image;
      $this->query($query);
      $row = $this->affected_rows();
      if(file_exists($imagePath)){
        unlink($imagePath);
      }
        $this->close();
        Message::setMsg('Tourist Spot Deleted Successfully','success');
        return $row;
      
  }
}