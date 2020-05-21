<?php 
class Touristspots extends Controller{
  public function index(){
    $viewModel = new TouristModel();
    $this->returnView($viewModel->index(), true);
  }

  public function delete(){
      if($_SESSION['is_logged_in']){
        $viewModel = new TouristModel();
        var_dump($_GET['id']);
        $result = $viewModel->delete();
        if($result){
          header('Location:'.ROOT_URL.'touristspots');
        }
        
      }else{
        header('Location:'.ROOT_URL.'admin/login');
      }
  }

  public function add(){
    if($_SESSION['is_logged_in']){
      $viewModel = new TouristModel();
      $this->returnView($viewModel->add(),true);
    }else{
      header('Location:'.ROOT_URL.'admin/login');
    }
  
  }
}