<?php


/**
 * 
 */
class View
{
	
	function __construct()
	{
		# code...
		
	}
	public function render($path)
	{
		require 'views/'.$path.'.php';

	}
}

?>