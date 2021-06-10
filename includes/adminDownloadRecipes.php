<?php
require_once 'database.php';
require_once 'adminFunctions.php';
$recipes = getRecipes($connection);

$data = array();
while ($row = mysqli_fetch_array($recipes, MYSQLI_NUM)) {
    $data[]=$row;
}

array_to_csv_download($data, "recipes.csv");