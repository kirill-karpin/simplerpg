<?php
class App_Controllers_Login extends App_Core_Controller {

    public function index(){
        $this->view->generate('login.php', 'template.php');
    }

     function  getRequest(){
        App_Models_Login::checkLogin();

    }

}