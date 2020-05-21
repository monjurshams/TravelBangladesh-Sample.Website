<?php 
class Home extends Controller{
  public function index(){
    $viewModel = new HomeModel();
    $this->returnView($viewModel->index(), true);
  }
}