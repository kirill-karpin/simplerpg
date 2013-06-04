<?php
class App_Controllers_Login extends App_Core_Controller {

    public function index(){
        $this->view->generate('login.php', 'template.php');
    }

     function  getRequest(){
        if (App_Models_Login::checkLoginGet()) {
            $this->view->generate('profile.php', 'template.php');
        } else {
            $this->view->generate('login.php', 'template.php');
        };

    }

    function  postRequest(){
        if (App_Models_Login::checkLoginPost()) {
            $this->view->generate('profile.php', 'template.php');
        } else {
            $this->view->generate('login.php', 'template.php');
            echo "Incorrect login or password";
        };

    }
}