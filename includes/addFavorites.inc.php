<?php
require_once 'database.php';
//require_once 'recipe.inc.php';
require_once 'userFunctions.php';

$userId = $_SESSION['id'];
$recipeId = $_POST["recipeId"];

$sql_check = "SELECT * FROM favorites WHERE user_id=? AND recipe_id=?;";
$stmt_check = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt_check, $sql_check)) {
        echo "Eroare la select";
    }

    mysqli_stmt_bind_param($stmt_check, "ss", $userId, $recipeId);
    mysqli_stmt_execute($stmt_check);
    $result_data = mysqli_stmt_get_result($stmt_check);
    mysqli_stmt_close($stmt_check);

$nr_favorites = mysqli_num_rows($result_data);
if ($nr_favorites == 0) {
    $sql = "INSERT INTO favorites (user_id,recipe_id) VALUES (?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Eroare la inserare";
    }

    mysqli_stmt_bind_param($stmt, "ss", $userId, $recipeId);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    echo "Inserat cu succes";
} else {
    echo "Reteta e deja la favorite!";
}

