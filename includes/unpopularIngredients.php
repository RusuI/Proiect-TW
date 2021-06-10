<?php

require_once 'database.php';
require_once 'popularFunctions.php';

$unpopularIngredientsList = getUnpopularIngredients($connection);
$index = 1;

unlink("UnpopularIngredients.html");
$myfile = fopen("UnpopularIngredients.html", "w") or die("Unable to open file!");

$content =
    '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Ingredients | WhaF</title>

</head>
    
<body>
<ol>
';
fwrite($myfile, $content);

echo '<ol>';
$data= array();
while ($row = mysqli_fetch_array($unpopularIngredientsList, MYSQLI_NUM)) {
    $data[]=$row;
    echo  '<li> ' . $row[0] . ' - ' . $row[1] . ' rejections; </li>';
}
echo '</ol>';





$f = fopen("UnpopularIngredients.csv", "w");
foreach ($data as $line) {
    fputcsv($f, $line);
}
fclose($f);


$fp = fopen('UnpopularIngredients.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
