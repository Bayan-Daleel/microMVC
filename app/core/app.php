<?php
namespace MVC\core;

class App {

  private $controller;
  private $method;
  private $params =[];

    public function __construct() {
      $this->url();
      $this->render();
    }

    private function url(){

      if(!empty($_SERVER['QUERY_STRING'])){
      $url = explode("/", $_SERVER['QUERY_STRING']);
      $this->controller = isset($url[0]) ? $url[0]."controller" : 'homecontroller';
    // echo $this->controller;
      $this->method=isset($url[1]) ? $url[1] : 'index';
      unset($url[0],$url[1]);
      $this->params = array_values($url);
    }
    else{
      $this->controller = 'homecontroller';
      $this->method = 'index';
    }
    }

    private function render(){
     
     $controller= "MVC\controllers\\".$this->controller;
    // echo $controller;
     if(class_exists($controller)){

      $controller = new $controller();

     if(method_exists($controller, $this->method)){
         call_user_func_array([$controller,$this->method],$this->params);
             }


             else{  

              echo 'not exist method';

             }
      }

      else{
       echo 'not exist';
    }

}
}