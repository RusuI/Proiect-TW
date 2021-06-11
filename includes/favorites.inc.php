<?php
require_once 'database.php';
require_once 'userFunctions.php';
//require_once 'recipe.inc.php';


$userId = $_SESSION['id'];
//$recipeId = $_GET['recipeId'];

$userFavorites = getFavoritesByUid($connection, $userId);

if ($userFavorites == null) {
    header("location: ../views/favorites.php?error=noFavorites");
    exit();
}


while ($row = mysqli_fetch_array($userFavorites, MYSQLI_NUM)) {
    $id = $row[0];
    $name =  $row[1];
    $description = $row[2];
    $author = $row[3];
    $photo = $row[4];

    echo
    '<div class="single-result" id="recipe' . $id . '">
    <div class="container" id="candidate">
        <img src="../includes/uploads/' . $photo . '" alt="result image" class="result-img">
        <a href="javascript:void(0)"><i class="fas fa-trash-alt" onclick="removeFromFavorites('.$id.')"></i></a>
    </div>
    <div class="single-result-content">
        <div class="single-result-top">
            <span>
                <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                <i class="far fa-star" style="margin-right: -0.5rem;"></i>
            </span>
            <span>
                <i class="fas fa-user"></i>' . $author .
        '</span>
            <span>
                <i class="fas fa-comment"></i> 57
            </span>
        </div>

        <h2 class="text-large">' . $name . '</h2>
        <p class="text-light">' . $description . '</p>
        <a href="../views/recipe1.php?idRecipe=' . $id . '" class="btn-link">Read More</a>
    </div>
</div>';
}
