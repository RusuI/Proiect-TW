<?php



function getIngredients($connection, $category)
{
    $sql = "SELECT * FROM ingredients WHERE category = ? ORDER BY name ASC;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)
    /* errors
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }*/
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $category); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);

    /*  if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row;
    } else {
        $result = false;
        return $result;
    }*/
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


function emptyInputRecipe($name, $description, $prep_time, $cook_time, $serv, $diff, $list, $listStep)
{
    $result = false;

    if (empty($name) || empty($description) || empty($prep_time) || empty($cook_time) || empty($serv) || empty($diff) || empty($list) || empty($listStep)) {
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

function getRecipeId($connection, $name, $authorid){
 //pentru numele retetei
 $sql = "SELECT id FROM recipe WHERE name = ? AND author_id =?;";
 $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)


 if (!mysqli_stmt_prepare($stmt, $sql)) {
     $result = 0;
     return $result;
 }

 mysqli_stmt_bind_param($stmt,"ss", $name, $authorid); //bind the data from the user to the actual user
 mysqli_stmt_execute($stmt); // execute the statement

 $result_data = mysqli_stmt_get_result($stmt);
 //
 mysqli_stmt_close($stmt);

if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row['id'];
    }
 
}


function getIngredientId($connection, $name_ingr){
//pentru id ul ingredientului
$sql = "SELECT id FROM ingredients WHERE name = ?;";
$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    $result = 0;
    return $result;
}

mysqli_stmt_bind_param($stmt,"s", $name_ingr); //bind the data from the user to the actual user
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
   
   
    $recipeId=getRecipeId($connection, $name, $authorid);
   
    $ingredientId=getIngredientId($connection,$name_ingr);

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



function addRecipeSteps($connection,$name,$authorid,$count,$step_detail){
    $result=1;

    $recipeId=getRecipeId($connection, $name, $authorid); 

    $sql = "INSERT INTO steps (recipe_id,step_nr,step_details) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result=0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt,"sss",$recipeId,$count,$step_detail);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
     return $result;
}




function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}