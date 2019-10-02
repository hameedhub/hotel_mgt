<?php

class Reservation extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('reservation/js/default.js');
    }
    function index(){
        $this->view->render('reservation/index');
    }
    
    function addReservation(){
        $this->model->addReservation();
    }
    function List(){
        $this->model->List();
    }
}




?>