<?php 

class Dashboard extends Controller
{
    function __construct(){

        parent:: __construct();
         Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: login');
            exit;
        };
        if(Session::get('data')['access']== sales){
            header('location: sales');
        }

        $this->view->js = array('dashboard/js/default.js');
    }
    function logout(){
        Session::destroy();
        header('location: ../login');
    }
    function insertEvent(){
		$this->model->insertEvent();
    }
    function eventList(){
        $this->model->eventList();
    }
    function index(){
        $this->view->render('dashboard/index');
    }
}




?>