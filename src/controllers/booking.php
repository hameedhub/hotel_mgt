<?php

class Booking extends Controller
{
    function __construct(){
        parent:: __construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        $this->view->js = array('booking/js/default.js');

    }
    function screen(){
        
    }
    function availRooms(){
        $this->model->availRooms();
    }
    function bookedGuest(){
        $this->model->bookedGuest();
    }
    function addBooking(){
        $this->model->addBooking();
    }
    function viewBooking(){
        $this->model->viewBooking();
    }
    function index(){
        $this->view->render('booking/index');
    }
}



?>