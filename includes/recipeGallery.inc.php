<?php
error_reporting(0);
require_once 'database.php';
require_once 'recipePageFunctions.php';
require_once 'recipeFunctions.php';
require_once 'recipe.inc.php';

$recipeID=$_POST["recipeId"];

$recipePhoto=displayimages($connection,$recipeID);

echo '<h1 class="heading"> Recipe <span>gallery</span> </h1>';
while ($row = mysqli_fetch_assoc($recipePhoto)) {
   echo '<div class="gallery"><div class="box-container">
           <div class="box" >
                <div> <img src="../includes/uploads/'. $row['photo'].'"></div>
           </div>
        </div>';
}