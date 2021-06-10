<?php 

require_once 'database.php';
require_once 'recipeFunctions.php';
require_once 'recipePageFunctions.php';
session_start();



$userId=$_SESSION['id'];



$myRecipes=getUserRecipes($connection,$userId);






