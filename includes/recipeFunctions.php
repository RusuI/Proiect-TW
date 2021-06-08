<?php

session_start();
function emptyInputFAQ($username,$question){
    $result = false;

    if (empty($username) || empty($question)) {
        $result = true;
    }

    return $result;
}

function sendQuestion($connection,$username,$question){

    $question   = mysqli_real_escape_string($connection, $question);

    $query = "INSERT INTO faq (user_id, question)";
    $query .= "VALUES('{$_SESSION['id']}', '{$question}')";
    $addQuestion = mysqli_query($connection, $query);
    if(!$addQuestion ){
        die("Query failed" . mysqli_error($connection));
    }else{
        header('Location: ../views/faq.php');
        exit();
    }
}


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
    echo '<div class="col">'."\n";
    while ($row = mysqli_fetch_array($ingredients, MYSQLI_NUM)){
        $ingr = $row[1];
        echo '<input type="checkbox" name="wanted[]" id="' . $ingr . '" value="' . $ingr . '">'."\n";
        echo '<label for="' . $ingr . '">' . $ingr . '</label>'."\n";
        if (($n % 3) == 0) {
            echo '</div>'."\n";
            if ($n < $size) echo '<div class="col">'."\n";
        }
        $n = $n + 1;
     }
    if (($n - 1) % 3 != 0) echo '</div>'."\n";
}


function emptyInputRecipe($username, $email, $password, $confpassword)
{
    $result = false;

    if (empty($username) || empty($email) || empty($password) || empty($confpassword)) {
        $result = true;
    }

    return $result;
}



    