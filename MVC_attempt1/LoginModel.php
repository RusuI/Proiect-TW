<?php
include_once("database.php");
class LoginModel extends Database{
	public function __construct()
	{
	//	parent::__construct();
	//	Session::init();
	}

	public function getLogin()
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$sql = "SELECT * FROM usersauth where username = '" . $username ."' and password = '" . $password . "'";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();

		return count($stmt->fetchAll());		
		
		/*if ($count > 0) {
			return true;
		/*	Session::init();
			Session::set('role', "user");
			Session::set('loggedIn', true);
			Session::set('user_name', $username);
			Session::set('password', $res[0]['password']);
			header('location: '.URL.'login/index');
		} 
		   else { return false;
		Session::set('loggedIn', false);
			header('location: '.URL);
		}*/
		
		
	}
		
}