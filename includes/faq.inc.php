<?php

if(isset($_POST["submit"])){
        
$username = $_POST["username"];
$question = $_POST["question"];

require_once 'database.php';
require_once 'recipeFunctions.php';

if(emptyInputFAQ($username,$question) !== false){ //if it's anything besides false, just throw an error

    header("location: ../views/faq.php?error=emptyinput");
    exit();
}

sendQuestion($connection,$username,$question);

}else{
    header("location: ../views/faq.php");
    exit();
}