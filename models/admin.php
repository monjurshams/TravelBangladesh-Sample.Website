<?php 
class AdminModel extends Model{

  public function login(){
    $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    if(isset($post['login-submit'])){
      $email = $post['email'];
      $pass = md5($post['pass']);
      $query = "SELECT email,pass FROM admin where email=? and pass=?";
      $bind = "ss";
      $this->query($query,$bind,[$email,$pass]);
      $row = $this->result();
      if($row){
          $_SESSION['is_logged_in'] = true;
          $_SESSION['admin_data'] = array(
              'id'=>$row['id'],
              'name'=> $row['name'],
              'email'=>$row['email']

          );
          header('Location: '.ROOT_URL);
      }else{
        Message::setMsg('Incorrect Login','error');
      }

    }
  }
}