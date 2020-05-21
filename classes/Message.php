<?php 
  class Message{
    public static function setMsg($text,$type){
        if($type=='error'){
            $_SESSION['error_msg']=$text;

        }elseif($type=='success'){
            $_SESSION['success_msg']=$text;
        }
    }
    public static function displayMsg(){
        if(isset($_SESSION['error_msg'])){
            echo '<div class="alert alert-danger">'. $_SESSION['error_msg'].'</div>';
            unset($_SESSION['error_msg']);

        }elseif(isset($_SESSION['success_msg'])){
            echo '<div class="alert alert-success">'. $_SESSION['success_msg'] .'</div>';
            unset($_SESSION['success_msg']);
        }
    }

}
