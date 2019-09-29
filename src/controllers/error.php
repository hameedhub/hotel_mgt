<?php

/**
 * Erorr Controller
 */
class Erorr extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		echo "Page Not found";
		$this->view->render('error/index');
	}
}
?>