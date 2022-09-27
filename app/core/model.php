<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class Model{

  static function db(){
        $options = [
          //required
          'username' => USERNAME,
          'database' => DATABASE,
          //optional
          'password' => PASSWORD,
          'type' => DATABASE_TYPE,
          'charset' => 'utf8',
          'host' => SERVER,
          'port' => '3306'
      ];
        //  print_r($options);
         return $db = new Database($options);
    
    }

}