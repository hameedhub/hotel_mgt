<?php

class Register extends Controller
{
    function __construct(){
        parent:: __construct();

        $this->view->js = array('register/js/default.js');
    }

    function index(){
        $this->view->render('register/index');
    }

    function addUser(){
        $this->model->addUser();
    }
    function screen(){
        
    }
}



?>