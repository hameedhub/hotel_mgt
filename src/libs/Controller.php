<?php

/**
 * 
 */
class Controller
{
	
	function __construct()
	{
		# code...
		$this->view = new View();
	}

	public function loadModel($path)
	{
		//check if the file exist
		$file = 'models/'.$path.'_model.php';

		if (file_exists($file)) {
			require $file;
			//construct model name
			$model_name = $path.'_model';
			$this->model = new $model_name ();

			# code...
		}
	}
	
}

?>