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
		$data = $sth->fetchAll();
		// check the rowcount
		if($sth->rowCount() > 0){
			if($data[0]['access'] == '0'){
				echo "Sorry you have not been asigned access, please contact the manager. Thank you!";
			}else {
				Session::init();
				Session::set('loggedIn', true);
				Session::set('data', $data[0]);
			};
		}else{
			echo "Incorrect Email Address or Password";
		}
		
	
	}

	
}

?>