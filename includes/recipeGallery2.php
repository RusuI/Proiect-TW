<?php

require_once 'database.php';
require_once 'recipePageFunctions.php';
require_once 'recipeFunctions.php';
require_once 'recipe.inc.php';

$recipePhoto=displayimages($connection,$recipeId);

echo '<h1 class="heading"> Recipe <span>gallery</span> </h1>';
while ($row = mysqli_fetch_assoc($recipePhoto)) {
   echo '<div class="gallery"><div class="box-container">
           <div class="box" >
                <div> <img src="../includes/uploads/'. $row['photo'].'"></div>
           </div>
        </div>';
}
