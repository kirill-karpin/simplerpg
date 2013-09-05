<?php

class App_Models_Login extends App_Core_Model {

   public static function checkLogin ($login, $password) {

       if (($login== "kirill") && ($password == "123") ){
            return true;
       } else {
           return false;
       }
   }

}