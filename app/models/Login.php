<?php

class App_Models_Login extends App_Core_Model {

   public static function checkLoginGet () {

       if (($_GET['login']== "kirill") && ($_GET['password'] == "123") ){
            return true;
       } else {
           return false;
       }
   }


    public static function checkLoginPost (){
        if (($_POST['login']== "kirill") && ($_POST['password'] == "123") ){
            return true;
        } else {
            return false;
        }
    }
}