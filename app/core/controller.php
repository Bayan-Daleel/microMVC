<?php
   namespace MVC\core;

   Class Controller {

    public function view($path,$param){
      extract($param); //convert  evry key and value to varaible and value
     require_once(VIEWS.$path.".php");
    }

   }

?>