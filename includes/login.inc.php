<?php

if(isset($_POST["submit"])){
        
$username = $_POST["username"];
$password = $_POST["password"];

require_once 'database.php';
require_once 'userFunctions.php';

if(emptyInputLogin($username,$password) !== false){ //if it's anything besides false, just throw an error

    header("location: ../views/login.php?error=emptyinput");
    exit();
}

login_user($connection,$username,$password);

}else{
    header("location: ../views/login.php");
    exit();
}