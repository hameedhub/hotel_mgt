<?php

/**
 * Application class
 */
class App
{

	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		//print_r($url);

		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		$file = 'controllers/' .$url[0]. '.php';
		if (file_exists($file)) {
			require $file;
		}else{
			require 'controllers/error_.php';
			$controllers = new Error_();
			$controllers->index();
			return false;

		}

		$controller = new $url[0];
		$controller->loadModel($url[0]);

		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			}else{
				require 'controllers/error_.php';
				$controllers = new Error_();
				$controllers->index();
				return false;
			}
		}else{
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();

				}else {
					throw new Exception("Error Processing Request", 1);

					require 'controllers/error_.php';
					$controllers = new Error_();
					$controllers->index();
					return false;
				}

			}
		}
		if(isset($url[1])){
			$controller->screen();
		}

		$controller->index();

	}
}

?>
