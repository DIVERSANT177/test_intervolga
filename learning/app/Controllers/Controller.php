<?php

namespace App\Controllers;

class Controller{
    protected $template;
    public function __construct(){
        $this->template = '../resources/views/';
    }
}