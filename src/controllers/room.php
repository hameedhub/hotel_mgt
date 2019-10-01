<?php

class Room extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('room/js/default.js');


    }
    function index(){
        $this->view->render('room/index');
        exit;
    }
    function saveType(){
       $this->model->saveType();
     }
     
    function typeList(){
        $this->model->typeList();
    }
    function delType(){
        $this->model->delType();
    }
    function addRoom(){
        $this->model->addRoom();
    }
    function roomList(){
        $this->model->roomList();
    }
    function delRoom(){
        $this->model->delRoom();
    }
    
    public function type(){
        
    }
    function screen(){
        $this->view->render('room/type/index');
        exit;
    }
    
}



?>