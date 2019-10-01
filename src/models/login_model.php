<?php

/**
 * Login Model
 */
class Login_Model extends Model
{
	
	function __construct()
	{
		parent:: __construct();
	}
	public function run(){

		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sth = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
		$sth->execute(array(
			':email'=> $email,
			':password'=> $password
		));
		// check the rowcount

		if($sth->rowCount() > 0){
			Session::init();
			Session::set('loggedIn', true);
			header('location: dashbord.php');
		}else{
			header('location: login.php');
		}
	
	}

	
}

?>