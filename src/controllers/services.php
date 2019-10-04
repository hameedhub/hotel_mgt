<?php

class Services extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('services/js/default.js');

    }
    function index(){
        $this->view->render('services/index');
        exit;
    }
    function addService (){
        $this->model->addService();
    }
    function getServices(){
        $this->model->getServices();
    }
    function delService(){
        $this->model->delService();
    }
    function screen(){
        
    }
}


?>