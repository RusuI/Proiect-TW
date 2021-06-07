<?php

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

if(userExists($connection,$username,$email) !== false){ 

    header("location: ../views/signup.php?error=usertaken");
    exit();
}

signup_user($connection,$username,$email,$password);


}else{
    header("location: ../views/signup.php");
    exit();
}