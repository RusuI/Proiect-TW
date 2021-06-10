<?php
require_once 'database.php';
require_once 'adminFunctions.php';

$answer=$_POST["answer"];
$question=$_POST["faq"];
$id = substr($question, 3);

updateFAQ($connection, $id, $answer);
header("location: ../views/admin.php?error=none");