<?php
class App_Controllers_Login extends App_Core_Controller {

    public function index(){
        $this->view->generate('login.php', 'template.php');
    }


    public function auth(){
        if (!empty($_GET)){
            $login = $_GET['login'];
            $password = $_GET['password'];

        }

        if (!empty($_POST)){
                $login = $_POST['login'];
                $password = $_POST['password'];
        }


        if (App_Models_Login::checkLogin($login,$password)){
            $this->model = new App_Models_Personage();
            $this->view->setData($this->model->getCharacterParams());
            $this->view->generate('profile.php', 'template.php');
        }
    }



}