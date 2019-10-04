<?php

class Sales extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('sales/js/default.js');
    }
    function index(){
        $this->view->render('sales/index');
    }
    function services(){
        $this->model->services();
    }
    function addSale(){
        $this->model->addSale();
    }
    function screen(){
        
    }
}


?>