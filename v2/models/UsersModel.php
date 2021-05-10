<?php
include_once("Database.php");
class UsersModel extends Database{
	public function __construct()
	{
	}

	public function getLogin()
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$sql = "SELECT * FROM users where username = '" . $username ."' and password = '" . $password . "'";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();

		return count($stmt->fetchAll());		
	}
		
}
