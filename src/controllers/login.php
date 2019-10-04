<?php

/**
 * Login Controller
 */
class Login extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->view->js = array('login/js/default.js');
	}
	function run(){
		$this->model->run();
		exit;
	}
	function index(){
		$this->view->render('login/index');
		exit;
	}
}

?>
