<?php

namespace App\Http;

class Response
{
    protected $view; //array, json, pdf ...

    public function __construct($view)
    {
        $this->view = $view; //home, contact
    }

    public function getView()
    {
        return $this->view;
    }

    public function send()
    {
        $view = $this->getView();
        //home
        $content = file_get_contents(__DIR__ . "/../../views/$view.php");
        // se imprime en la plantilla layout.php
        require __DIR__ . "/../../views/layout.php";
    }
}