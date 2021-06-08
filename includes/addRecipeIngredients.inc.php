
<?php
 require_once 'database.php';
 require_once 'recipeFunctions.php';
 $category = $_POST['category'];
    $ingredients = getIngredients($connection, $category);
    $size = mysqli_num_rows($ingredients);
    echo ' <select tabindex="1" class="select_list" id="ingredients">'."\n";
    while ($row = mysqli_fetch_array($ingredients, MYSQLI_NUM)){
        $ingr = $row[1];
        echo '<option class="ui-select__option" name="' . $ingr . '" value="' . $ingr . '">'. $ingr . '</option>'."\n";
     }
    echo '</select>';
