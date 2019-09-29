<?php

/**
 * Help Controller
 */
class Help extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->view->render('help/index');
	}
	public function Others($arg=false)
	{
		# code...
		echo "Others";
		echo $arg;
	}
}


?>