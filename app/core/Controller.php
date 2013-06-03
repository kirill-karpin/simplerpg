<?php

class App_Core_Controller {

    public $model;
    public $view;

    public function __construct(){
        $this->view = new App_Core_View();
    }

    public function index(){

    }

}