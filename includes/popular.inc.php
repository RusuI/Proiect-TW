<?php

require_once 'database.php';
require_once 'popularFunctions.php';

$popularList = getPopularRecipes($connection);
$index = 1;
//unlink("popular.html");
$myfile = fopen("popular.html", "w") or die("Unable to open file!");

$content =
    '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Recipes | WhaF</title>

</head>
    
<body>
<ol>
';
//fwrite($myfile, $content);

$data= array();
while ($row = mysqli_fetch_array($popularList, MYSQLI_NUM)) {

    $data[]=$row;
    $content .= '<li> ' . $row[1] . ' - ' . $row[2] . ':' . $row[7] . ' pictures; </li>';
    //fwrite($myfile, $content);


    echo
    '<div class="single-result">
    <div class="container container-rest">
        <img src="../includes/uploads/' . $row[6] . '" alt="result image" class="result-img">
        <p class="result-time">' . $row[3] . 'min</p>
        <p class="result-diff">' . $row[4] . '</p>

        <i class="far fa-star"></i>
        <p class="rank">' . $index++ . '</p>
    </div>
    <div class="single-result-content">
        <div class="single-result-top">
            <span>
                <i class="fas fa-user">' . $row[5] . '</i>
            </span>
            <span>
                <i class="fas fa-image">' . $row[7] . '</i> 
            </span>
        </div>

        <h2 class="text-large">' . $row[1] . '</h2>
        <p class="text-light">' . $row[2] . '</p>
        <a href="../views/recipe.php" class="btn-link">Read More</a>
    </div>
</div>';
}

$content .= '</ol></body></html>';
fwrite($myfile, $content);
fclose($myfile);



$f = fopen("popular.csv", "w");
foreach ($data as $line) {
    fputcsv($f, $line);
}
fclose($f);



$fp = fopen('popular.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

//array_to_csv_download($data);
