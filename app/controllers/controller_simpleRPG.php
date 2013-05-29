<?php

class Controller_simplerpg extends Controller{

    function action_index(){
        $this->view->generate('main_view.php', 'template_view.php');
    }

    function action_login(){
        $this->view->generate('login_view.php', 'template_view.php');

    }

}
