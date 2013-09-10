<?php

class App_Core_View {
    public $params;


    function generate($contentView, $template_view, $data = null)
    {
       include APP . '/App/Views/'.$template_view;
    }

}