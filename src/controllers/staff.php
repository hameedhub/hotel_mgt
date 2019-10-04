<?php

class Staff extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('staff/js/default.js');
    }
    function screen(){
        
    }
    function view(){
        $this->model->view();
    }
    function viewAccess(){
        $this->model->viewAccess();
    }
    function viewUsers(){
        $this->model->viewUsers();
    }
    function index(){
        $this->view->render('staff/index');
    }
    function role(){
        $this->model->role();
    }
   
}

?>