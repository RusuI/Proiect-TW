<?php
session_start();
require_once 'database.php';
require_once 'recipe.inc.php';


    $userId = $_SESSION['id'];
    $recipeId=$_POST['recipeId'];
    $sql = "DELETE FROM favorites WHERE user_id=? and recipe_id=?;";

    $stmt = mysqli_stmt_init($connection);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $userId, $recipeId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

