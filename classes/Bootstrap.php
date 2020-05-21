<?php
class Bootstrap{
  private $request;
  private $controller;
  private $action;

  /**
   * Application always starts from index.php ! And everytime , the get request will be passed through 
   * the object of Bootstrap class.
   * $bootstrap = New Bootstrap($_GET).
   * in our .htaccess ,
   * index.php?controller=$1&action=$2&id=$3 
   * first parameter is controller and the second parameter is action
   * thats why application is going to recieve an array of get request which contains controller and action 
   * keys 
   */
  public function __construct($request){
    $this->request = $request;
    if($this->request['controller']==''){
      $this->controller = 'home';
    }else{
      $this->controller = $this->request['controller'];
    }

    if($this->request['action']==''){
      $this->action = 'index';
    }else{
      $this->action = $this->request['action'];
    }
  }


  public function createController(){
    /**
     * class_exists('class_name') 
     * @return boolean true or false based on the name of the class exists or not!
     * class_parents('class_name')
     * @return array contains the parents name of the given class!
     * method_exists('object_of_class','method_name')
     * @return boolean true or false based on if the given method exists in the class or not
     */
    if(class_exists($this->controller)){
      $parents = class_parents($this->controller);
      if(in_array('Controller',$parents)){
        if(method_exists($this->controller,$this->action)){
          return new $this->controller($this->action,$this->request);
        }else{
          echo '<h1>Invalid URL: (Method Does not exist)</h1>'; 
          return;
        }
      }else{
        echo '<h1>Invalid URL: (Base Controller Does not exist)</h1>'; 
        return;
      }
    }else{
      echo '<h1>Invalid URL: (Controller Does not exist)</h1>';
      return;
    }
  }
}