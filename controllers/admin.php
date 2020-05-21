<?php 
class Admin extends Controller{
  public function login(){
    if(isset($_SESSION['is_logged_in'])){
      header('Location:'.ROOT_URL);
    }else{
      $viewModel = new AdminModel();
      $this->returnView($viewModel->login(),true);
    }
  }

  protected function logout(){
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['admin_data']);
    session_destroy();
    header('Location:'.ROOT_URL);
  }
}