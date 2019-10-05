<?php

/**
 * Erorr Controller
 */
class Error_ extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	function index(){
		$this->view->render('error_/index');
	}
}
?>