<?php

class App_Models_Login extends App_Core_Model {

   public static function checkLogin () {

       if (($_GET['login']== "kirill") && ($_GET['password'] == "123") ){
            echo "Access granted.";
       } else {
           echo "Incorrect login or password.";
       }
   }

}