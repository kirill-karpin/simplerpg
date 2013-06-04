<?php

class App_Controllers_Main extends App_Core_Controller{

    function index(){
        $this->view->generate('main.php', 'template.php');
    }
}
