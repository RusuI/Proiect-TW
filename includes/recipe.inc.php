<?php


require_once 'database.php';
require_once 'recipeFunctions.php';
require_once 'recipePageFunctions.php';


//$recipeId=$_GET['id'];

$recipeId=2;

$recipeInfo=getRecipeById($connection,$recipeId);



$recipeSteps=getRecipeStepsById($connection,$recipeId);

$recipeIngredients=getRecipeIngredientsById($connection,$recipeId);

$recipeScore=getScorePhoto($connection,$recipeId);

$recipeAuthor=getRecipeAuthor($connection,$recipeId);




