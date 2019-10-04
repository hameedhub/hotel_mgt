<?php

class Schedule extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('schedule/js/default.js');
    }
    function index(){
        $this->view->render('schedule/index');
    }
    function screen(){

    }
    function viewEvents(){
        $this->model->viewEvents();
    }
    function delEvent(){
        $this->model->delEvent();
    }
}


?>