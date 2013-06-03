<?php

class App_Controllers_Combat  extends Controller {

    function index(){
        $this->view->generate('combat.php', 'template.php');
    }
}