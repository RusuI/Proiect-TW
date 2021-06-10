<?php
require_once 'database.php';
require_once 'adminFunctions.php';
$recipes = getRecipes($connection);

echo '<select name="recipes" id="recipes">';
echo '<option disable selected> --All recipes-- </option>'."\n";
while ($row = mysqli_fetch_array($recipes, MYSQLI_NUM)) {

    echo '<option  name="recipe' . $row[0] . '" value="faq' . $row[0] . '">'.$row[0].' - '. $row[1]. '</option>'."\n";
}
echo '</select>';
