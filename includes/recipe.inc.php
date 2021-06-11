<?php
error_reporting(0);
require_once 'database.php';
require_once 'recipeFunctions.php';
require_once 'recipePageFunctions.php';

$recipeId=$_GET['idRecipe'];

$recipeInfo=getRecipeById($connection,$recipeId);

$recipePhoto=displayimages($connection,$recipeId);

$recipeSteps=getRecipeStepsById($connection,$recipeId);

$recipeIngredients=getRecipeIngredientsById($connection,$recipeId);

$recipeScore=getScorePhoto($connection,$recipeId);

$recipeAuthor=getRecipeAuthor($connection,$recipeId);
