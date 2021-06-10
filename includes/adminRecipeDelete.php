<?php
require_once 'database.php';
require_once 'adminFunctions.php';

$id=$_POST["recipeId"];

deleteRecipe($connection, $id);
header("location: ../views/admin.php?error=none");