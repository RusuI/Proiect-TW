<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["submit"])){
    
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confpassword = $_POST["confpassword"];

require_once 'database.php';
require_once 'userFunctions.php';

if(emptyInputSingup($username,$email,$password,$confpassword) !== false){ //if it's anything besides false, just throw an error

    header("location: ../views/signup.php?error=emptyinput");
    exit();
}

if(emptyUser($username) !== false){ 

    header("location: ../views/signup.php?error=emptyuser");
    exit();
}

if(emptyEmail($email) !== false){ 

    header("location: ../views/signup.php?error=emptyemail");
    exit();
}
if(emptyPassword($password) !== false){

    header("location: ../views/signup.php?error=emptypassword");
    exit();
}

if(emptyPasswordConf($confpassword) !== false){

    header("location: ../views/signup.php?error=emptypasswordconf");
    exit();
}


if(invalidUsername($username) !== false){ 

    header("location: ../views/signup.php?error=invalidusername");
    exit();
}

if(invalidEmail($email) !== false){ 

    header("location: ../views/signup.php?error=invalidemail");
    exit();
}


if(pwdMatch($password,$confpassword) !== false){ 

    header("location: ../views/signup.php?error=pwddontmatch");
    exit();
}

if(userExists($connection,$username) !== false){ 

    header("location: ../views/signup.php?error=usertaken");
    exit();
}

if(emailExists($connection,$email) !== false){ 

    header("location: ../views/signup.php?error=emailtaken");
    exit();
}

signup_user($connection,$username,$email,$password);


}else{
    header("location: ../views/signup.php");
    exit();
}