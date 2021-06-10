<?php
function getFAQ($connection)
{
    $sql = 'SELECT quest_id, question FROM faq WHERE answer="";';
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;

    mysqli_stmt_close($stmt);
}

function updateFAQ($connection, $id, $answer)
{
    $sql = "UPDATE faq SET answer=? WHERE quest_id = ?;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $answer, $id);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;

    mysqli_stmt_close($stmt);
}

function deleteRecipe($connection, $recipeId)
{

    $sql = "DELETE FROM recipe WHERE id = ?;";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $sql); 

    mysqli_stmt_bind_param($stmt, "s", $recipeId); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
}

function getRecipes($connection)
{
    $sql = 'SELECT * FROM recipe;';
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;

    mysqli_stmt_close($stmt);
}

function getUsers($connection)
{
    $sql = 'SELECT id, username, email, description FROM users;';
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;

    mysqli_stmt_close($stmt);
}

function deleteUser($connection, $username)
{

    $sql = "DELETE FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $sql); 

    mysqli_stmt_bind_param($stmt, "s", $username); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);
}

function array_to_csv_download($array, $filename = "export.csv", $delimiter=",") {
    // open raw memory as file so no temp files needed, you might run out of memory though
    $f = fopen('php://memory', 'w'); 
    // loop over the input array
    foreach ($array as $line) { 
        // generate csv lines from the inner arrays
        fputcsv($f, $line, $delimiter); 
    }
    // reset the file pointer to the start of the file
    fseek($f, 0);
    // tell the browser it's going to be a csv file
    header('Content-Type: application/csv');
    // tell the browser we want to save it instead of displaying it
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    // make php send the generated csv lines to the browser
    fpassthru($f);
}