<?php
require_once 'database.php';
require_once 'recipeFunctions.php';
require_once 'userFunctions.php';
//$data = file_get_contents('php://input');
//$data = json_decode($data, true);

$ingredients = $_POST["ingredients"];
$badIngredients = $_POST["badIngredients"];
$difficulty = $_POST["difficulty"];
$prepTime = $_POST["prepTime"];
$cookTime = $_POST["cookTime"];
$servings = $_POST["servings"];
$sortOrder = $_POST["sortOrder"];



$recipes = getRecipes($connection, $ingredients, $badIngredients, $difficulty, $prepTime, $cookTime, $servings, $sortOrder);

if (isset($_SESSION["id"])) {
    $userId = $_SESSION['id'];
} else {
    $userId = -1;
}
//$GLOBALS
if ($recipes != null) {
    $i = 0;
    while ($row = mysqli_fetch_array($recipes, MYSQLI_NUM)) {
        $id = $row[0];
        $name =  $row[1];
        $description = $row[2];
        $prepTime = $row[3];
        $difficulty = $row[4];
        $author = $row[5];
        $photo = $row[7];
        $score= $row[8];
        echo
        '<div class="single-result">
    <div class="container">
        <img src="../includes/uploads/' . $photo . '"  alt="result image" class="result-img">
        <a href="#"><i class="fas fa-circle" style="color: red;font-size: 150%;margin: 2%; display:none;"></i></a>
        <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(' . $i . ',' . $userId . ',' . $id . ')" ></i></a>
        <p class="result-time">' . $prepTime . 'min.</p>
        <p class="result-diff">' . $difficulty . '</p>
    </div>
    <div class="single-result-content">
        <div class="single-result-top">
            <span>
                <i class="fas fa-user"></i>' . $author .
            '</span>
            <span>
                <i class="fas fa-image"></i>'. $score-2 .'
            </span>
        </div>

        <h2 class="text-large">' . $name . '</h2>
        <p class="text-light">' . $description . '</p>
        <a href="../views/recipe1.php?idRecipe='.$id.'" class="btn-link">Read More</a>
    </div>
</div>';
        $i++;
    }
}
