
<?php
function emptyInputSendPicture($name)
{
    $result = true;

    if (empty($name)) {
        $result = false;
    }

    return $result;
}


function displayimages($connection,$recipeId){

    
    $result=1;

    $sql = "SELECT photo FROM recipes_pictures WHERE recipe_id = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result=0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt,"s",$recipeId);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $result_data;


}


//POPULARITATEA POZEI
function getScorePhoto($connection,$recipeId){

    $sql = "SELECT COUNT(photo) FROM recipes_pictures WHERE recipe_id = ? GROUP BY recipe_id";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result=0;
        return $result;
    }

    mysqli_stmt_bind_param($stmt,"s",$recipeId);
    mysqli_stmt_execute($stmt); // execute the statement


    $result_data = mysqli_stmt_get_result($stmt);
    //
     mysqli_stmt_close($stmt);
     if ($row = mysqli_fetch_array($result_data, MYSQLI_NUM)) { 
    
        return $row[0];
    }
}
//FINAL POPULARITATE POZA
