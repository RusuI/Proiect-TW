<?php

function getPopularRecipes($connection)
{ 
    $result=1;
    $sql = "SELECT DISTINCT r.id, r.name, r.description, r.prep_time, r.diff, u.username, (SELECT photo FROM recipes_pictures JOIN recipe on recipes_pictures.recipe_id=recipe.id WHERE recipe_id=r.id LIMIT 1), (SELECT COUNT(photo) FROM recipes_pictures JOIN recipe ON recipes_pictures.recipe_id = recipe.id WHERE recipe_id = r.id) AS popular FROM recipe r JOIN recipe_ingr ri on r.id=ri.recipe_id join ingredients i on ri.ingr_id=i.id JOIN users u on r.author_id = u.id JOIN recipes_pictures rp on r.id = rp.recipe_id ORDER BY popular DESC;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;
    mysqli_stmt_close($stmt);
}



function getPopularIngredients($connection)
{ 
    $result=1;
    $sql = "SELECT name, search_want FROM ingredients ORDER BY search_want DESC ;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;
    mysqli_stmt_close($stmt);
}




function getUnpopularIngredients($connection)
{ 
    $result=1;
    $sql = "SELECT name, search_unwant FROM ingredients ORDER BY search_unwant DESC ;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;
    mysqli_stmt_close($stmt);
}




// function array_to_csv_download($array, $filename = "popular.csv", $delimiter=",") {
//     // open raw memory as file so no temp files needed, you might run out of memory though
//     $f = fopen('php://memory', 'w'); 
//     // loop over the input array
//     foreach ($array as $line) { 
//         // generate csv lines from the inner arrays
//         fputcsv($f, $line, $delimiter); 
//     }
//     // reset the file pointer to the start of the file
//     fseek($f, 0);
//     // tell the browser it's going to be a csv file
//     //header('Content-Type: application/csv');
//     // tell the browser we want to save it instead of displaying it
//     //header('Content-Disposition: attachment; filename="'.$filename.'";');
//     // make php send the generated csv lines to the browser
//     //fpassthru($f);
// }









