<?php

namespace MVC\models;
use MVC\core\Model;
class User extends Model{
 
    public function GetALLUser(){
       $data= Model::db()->rows("SELECT * FROM users");
       return $data;
   
    }

    public function GetUser($email,$password){
        $data= Model::db()->rows("SELECT * FROM users where `email` = ? && `password` = ? ",[$email,$password]);
        return $data;
    }
}