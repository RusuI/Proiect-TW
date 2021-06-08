<?php

require_once 'database.php';
session_start();

$user_id=$_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '{$user_id}';";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);


$sql_faq="SELECT * FROM faq;";
$faq_result= mysqli_query($connection,$sql_faq);
$row_faq = mysqli_fetch_assoc($faq_result);


$sql_recipe="SELECT * FROM recipe;";
$recipe_result= mysqli_query($connection,$sql_recipe);
$row_recipe = mysqli_fetch_assoc($recipe_result);
?>