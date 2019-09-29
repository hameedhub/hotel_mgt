<?php

/**
 * Index Controller
 */
class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}
	function index()
	{
		$this->view->msg = 'Hello world';
		$this->view->render('index/index');
	}
}


?>