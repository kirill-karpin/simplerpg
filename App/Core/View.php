<?php

class App_Core_View {

    protected $data;

    public function setData($data) {
        $this->data = $data;
    }

    function generate($contentView, $template_view, $data = null)
    {

        include APP . '/App/Views/'.$template_view;
    }

}