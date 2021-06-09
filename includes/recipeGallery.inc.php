<?php

require_once 'recipe.inc.php';
require_once 'recipeFunctions.php';

$recipePhoto=displayimages($connection,$recipeId);

while ($row = mysqli_fetch_assoc($recipePhoto)) {
  debug_to_console(`<div class="box-container">
  <div class="box" data-aos="fade-up">
       <div> <img src="../includes/uploads/`. $row['photo'].`"></div>
  </div>
</div>`);
   echo '<div class="box-container">
           <div class="box" data-aos="fade-up">
                <div> <img src="../includes/uploads/'. $row['photo'].'"></div>
           </div>
        </div>';
}



