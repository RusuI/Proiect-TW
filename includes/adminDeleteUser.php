<?php
require_once 'database.php';
require_once 'adminFunctions.php';

$username=$_POST["username"];

deleteUser($connection, $username);
header("location: ../views/admin.php?error=none");