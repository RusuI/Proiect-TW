<?php
error_reporting(0);
function getIngredients($connection, $category)
{
    $sql = "SELECT * FROM ingredients WHERE category = ? ORDER BY name ASC;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $category); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;

    mysqli_stmt_close($stmt);
}
function displayIngredients($connection, $category)
{
    $n = 1;
    $ingredients = getIngredients($connection, $category);
    $size = mysqli_num_rows($ingredients);
    echo '<div class="col">' . "\n";
    while ($row = mysqli_fetch_array($ingredients, MYSQLI_NUM)) {
        $ingr = $row[1];
        echo '<input type="checkbox" name="wanted[]" id="' . $ingr . '" value="' . $ingr . '">' . "\n";
        echo '<label for="' . $ingr . '">' . $ingr . '</label>' . "\n";
        if (($n % 3) == 0) {
            echo '</div>' . "\n";
            if ($n < $size) echo '<div class="col">' . "\n";
        }
        $n = $n + 1;
    }
    if (($n - 1) % 3 != 0) echo '</div>' . "\n";
}

//SEARCH

function getRecipes($connection, $ingredients, $badIngredients, $difficulty, $prepTime, $cookTime, $servings, $sortOrder)
{
    $ingredientsArray = explode(",", $ingredients);
    $ingredientsBadArray = explode(",", $badIngredients);
    if (!empty($ingredients) || !empty($badIngredients)) {
        $sql = "SELECT DISTINCT r.id, r.name, r.description, r.prep_time, r.diff, u.username, GROUP_CONCAT(i.name) AS ingr, (SELECT photo FROM recipes_pictures RIGHT JOIN recipe on recipes_pictures.recipe_id=recipe.id WHERE recipe_id=r.id LIMIT 1), ";
        $sql = $sql . "(SELECT COUNT(photo) FROM recipes_pictures RIGHT JOIN recipe ON recipes_pictures.recipe_id = recipe.id WHERE recipe_id = r.id) AS popular FROM recipe r ";
        $sql = $sql . "JOIN recipe_ingr ri on r.id=ri.recipe_id join ingredients i on ri.ingr_id=i.id JOIN users u on r.author_id = u.id ";
        $sql = $sql . prepSql($difficulty, $prepTime, $cookTime, $servings);
        $sql = $sql . " GROUP BY r.id Having ";

        $type = prepType($difficulty, $prepTime, $cookTime, $servings);
        $size = count($ingredientsArray);
        for ($i = 0; $i < $size - 1; $i++) {
            $sql = $sql . "Find_In_Set(?,ingr)>0 AND ";
            $type = $type . "s";
            updatePopularIngr($connection,$ingredientsArray[$i]);
        }
        if (!empty($ingredients)) {
            $sql = $sql . "Find_In_Set(?,ingr)>0";
            $type = $type . "s";
            updatePopularIngr($connection,$ingredientsArray[$size - 1]);
            if (!empty($badIngredients)) {
                $sql = $sql . " AND ";
            }
        }

        $size = count($ingredientsBadArray);
        for ($i = 0; $i < $size - 1; $i++) {
            $sql = $sql . "Find_In_Set(?,ingr)=0 AND ";
            $type = $type . "s";
            updateUnpopularIngr($connection, $ingredientsBadArray[$i]);
        }
        if (!empty($badIngredients)) {
            $sql = $sql . "Find_In_Set(?,ingr)=0";
            $type = $type . "s";
            updateUnpopularIngr($connection, $ingredientsBadArray[$size-1]);
        }
        $sql .= prepSort($sortOrder);
        $sql = $sql . ";";
        $stmt = mysqli_stmt_init($connection);

        $params = prepFilter($difficulty, $prepTime, $cookTime, $servings);
        if (empty($ingredients)) {
            if (!empty($params)) {
                $params  = array_merge($params, $ingredientsBadArray);
            } else {
                $params = $ingredientsBadArray;
            }
        } else if (empty($badIngredients)) {
            if (!empty($params)) {
                $params = array_merge($params, $ingredientsArray);
            } else {
                $params = $ingredientsArray;
            }
        } else {
            if (!empty($params)) {
                $params = array_merge($params, $ingredientsArray);
                $params = array_merge($params, $ingredientsBadArray);
            } else {
                $params = array_merge($ingredientsArray, $ingredientsBadArray);
            }
        }
        $result_data = getResult($connection, $sql, $type, $params);

        return $result_data;

        mysqli_stmt_close($stmt);
    } else {
        return null;
    }
}

function prepSort($sort)
{
    $sql = "";
    if (!empty($sort)) {
        $sql .= " ORDER BY ";
        switch ($sort) {
            case 'sort1':
                $sql .= "popular DESC";
                break;
            case 'sort2':
                $sql .= "prep_time";
                break;
            case 'sort3':
                $sql .= "cook_time";
                break;
            case 'sort4':
                $sql .= "serv";
                break;
        }
    }
    return $sql;
}

function prepType($difficulty, $prepTime, $cookTime, $servings)
{
    $type = "";
    if (!empty($difficulty)) {
        $type = $type . "s";
    }
    if ($prepTime != 0) {
        $type = $type . "ss";
    }

    if ($cookTime != 0) {
        $type = $type . "ss";
    }

    if ($servings != 0) {
        $type = $type . "ss";
    }
    return $type;
}

function prepFilter($difficulty, $prepTime, $cookTime, $servings)
{
    $params = [];
    if (!empty($difficulty)) {
        array_push($params, $difficulty);
    }
    //debug_to_console($params);
    if ($prepTime != 0) {
        $params = addTime($params, $prepTime);
    }
    //debug_to_console($params);
    if ($cookTime != 0) {
        $params = addTime($params, $cookTime);
    }
    //debug_to_console($params);
    if ($servings != 0) {
        switch ($servings) {
            case '1':
                array_push($params, 0);
                array_push($params, 1);
                break;
            case '3':
                array_push($params, 2);
                array_push($params, 3);
                break;
            case '5':
                array_push($params, 4);
                array_push($params, 5);
                break;
            case '8':
                array_push($params, 6);
                array_push($params, 8);
                break;
            case '9':
                array_push($params, 9);
                array_push($params, 100);
                break;
        }
        // debug_to_console($params);
    }
    return $params;
}

function addTime($params, $time)
{
    switch ($time) {
        case '10':
            array_push($params, 0);
            array_push($params, 10);
            break;
        case '30':
            array_push($params, 11);
            array_push($params, 30);
            break;
        case '60':
            array_push($params, 31);
            array_push($params, 60);
            break;
        case '120':
            array_push($params, 61);
            array_push($params, 120);
            break;
    }
    return $params;
}

function prepSql($difficulty, $prepTime, $cookTime, $servings)
{
    $sql = "";
    $check = true;
    if (!empty($difficulty)) {
        $sql = $sql . "WHERE ";
        $check = false;
        $sql = $sql . "diff = ? ";
    }
    if ($prepTime != 0) {
        if ($check) {
            $sql = $sql . "WHERE ";
            $check = false;
        } else {
            $sql = $sql . " AND ";
        }
        $sql = $sql . "prep_time BETWEEN ? AND ?";
    }

    if ($cookTime != 0) {
        if ($check) {
            $sql = $sql . "WHERE ";
            $check = false;
        } else {
            $sql = $sql . " AND ";
        }
        $sql = $sql . "cook_time BETWEEN ? AND ?";
    }

    if ($servings != 0) {
        if ($check) {
            $sql = $sql . "WHERE ";
            $check = false;
        } else {
            $sql = $sql . " AND ";
        }
        $sql = $sql . "serv BETWEEN ? AND ? ";
    }
    return $sql;
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "Debug Objects: " . $output;
}

function getResult($connection, $sql, $types = null, $params = null)
{
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, $types, ...$params);

    if (!mysqli_stmt_execute($stmt)) return false;
    return mysqli_stmt_get_result($stmt);
}

function updatePopularIngr($connection, $ingredient)
{
    $sql = "UPDATE ingredients SET search_want = search_want + 1 WHERE name=?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        $result = 0;
    }

    mysqli_stmt_bind_param($stmt, "s", $ingredient);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
}

function updateUnpopularIngr($connection,$ingredient)
{
    $sql = "UPDATE ingredients SET search_unwant = search_unwant + 1 WHERE name=?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        $result = 0;
    }

    mysqli_stmt_bind_param($stmt, "s", $ingredient);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
}

//SEARCH

//ADD RECIPE
function emptyInputRecipe($name, $description, $prep_time, $cook_time, $serv, $diff, $list, $listStep, $file1, $file2)
{
    $result = false;

    if (empty($name) || empty($description) || empty($prep_time) || empty($cook_time) || empty($serv) || empty($diff) || empty($list) || empty($listStep || empty($file1) || empty($file2))) {
        $result = true;
    }
    return $result;
}

function addRecipeInfo($connection, $name, $description, $prep_time, $cook_time, $serv, $diff, $user_id)
{
    $result = 1;
    $sql = "INSERT INTO recipe (name,description,prep_time,cook_time,serv,diff,author_id) VALUES(?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $name, $description, $prep_time, $cook_time, $serv, $diff, $user_id);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
    return $result;
}

function getRecipeId($connection, $name, $authorid)
{
    //pentru numele retetei
    $sql = "SELECT id FROM recipe WHERE name = ? AND author_id =?;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $authorid); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    //
    mysqli_stmt_close($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row['id'];
    }
}


function getIngredientId($connection, $name_ingr)
{
    //pentru id ul ingredientului
    $sql = "SELECT id FROM ingredients WHERE name = ?;";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $name_ingr); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    //
    mysqli_stmt_close($stmt);
    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row['id'];
    }
}

function addRecipeIngredients($connection, $name, $authorid, $name_ingr, $quantity, $unit_measure)
{
    $result = 1;
    $recipeId = getRecipeId($connection, $name, $authorid);

    $ingredientId = getIngredientId($connection, $name_ingr);

    $sql = "INSERT INTO recipe_ingr (recipe_id,ingr_id,quantity,unit_measure) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "ssss", $recipeId, $ingredientId, $quantity, $unit_measure);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
    return $result;
}



function addRecipeSteps($connection, $name, $authorid, $count, $step_detail)
{
    $result = 1;

    $recipeId = getRecipeId($connection, $name, $authorid);

    $sql = "INSERT INTO steps (recipe_id,step_nr,step_details) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "sss", $recipeId, $count, $step_detail);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
    return $result;
}



function addRecipePhotos($connection, $name, $authorID, $file1)
{
    $result = 1;
    $recipeId = getRecipeId($connection, $name, $authorID);
    $sql = "INSERT INTO recipes_pictures (recipe_id,photo) VALUES(?,?) ;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
        //adica upload failes;

    }

    mysqli_stmt_bind_param($stmt, "ss", $recipeId, $file1);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
    return $result; //adica succes
}





//pentru paginile de retete

function getRecipeById($connection, $recipeId)
{

    $result = 1;

    $sql = "SELECT * FROM recipe WHERE id = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $recipeId);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    //
    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row;
    }
    mysqli_stmt_close($stmt);
}


function getRecipeIngredientsById($connection, $recipeId)
{

    $result = 1;

    $sql = "SELECT i.name, r.quantity, r.unit_measure FROM recipe_ingr r JOIN ingredients i ON r.ingr_id=i.id WHERE r.recipe_id=?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $recipeId);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
        //
    ;

    return $result_data;
    mysqli_stmt_close($stmt);
}


// function getRecipeIngredientsName($connection,$recipeIngrediets){

//     $result=1;

//     $sql = "SELECT name FROM ingredients WHERE id = ?;";
//     $stmt = mysqli_stmt_init($connection);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         $result=0;
//         return $result;
//     }

//     mysqli_stmt_bind_param($stmt,"s",$recipeIngrediets['ingr_id']);
//     mysqli_stmt_execute($stmt); // execute the statement

//     $result_data = mysqli_stmt_get_result($stmt);
//     //
//     mysqli_stmt_close($stmt);
//     if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

//         return $row;
//     }
//     mysqli_stmt_close($stmt);

// }


function getRecipeStepsById($connection, $recipeId)
{

    $result = 1;

    $sql = "SELECT step_nr,step_details FROM steps WHERE recipe_id = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $recipeId);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;

    mysqli_stmt_close($stmt);
}






function getRecipeAuthor($connection, $recipeId)
{

    $result = 1;

    $authorID = getAuthorId($connection, $recipeId);
    $sql = "SELECT username FROM users WHERE id = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $authorID);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);
    //
    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row['username'];
    }

    mysqli_stmt_close($stmt);
}

//ID UL AUTORULUI

function getAuthorId($connection, $recipeId)
{

    $sql = "SELECT author_id FROM recipe WHERE id = ?;";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $recipeId); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    //
    mysqli_stmt_close($stmt);
    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row['author_id'];
    }
}
//FINAL ID UL AUTORULUI


//functii de luat imaginile

// final pagini retete

// pagina cu retele utilizatorului

function getUserRecipes($connection, $authorID)
{
    $sql = "SELECT id,name, (SELECT photo FROM recipes_pictures JOIN recipe on recipes_pictures.recipe_id=recipe.id  WHERE recipe_id=r.id LIMIT 1) FROM recipe AS r WHERE author_id=?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $authorID);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;
    mysqli_stmt_close($stmt);
}




function getUserRecipesPhoto($connection, $recipeId)
{
    $sql = "SELECT photo FROM recipes_pictures WHERE recipe_id = ? LIMIT 1;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = 0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt, "s", $recipeId);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);

    return $result_data;
    mysqli_stmt_close($stmt);
}

//

//end my recipes