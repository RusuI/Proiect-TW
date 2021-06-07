<?php
require_once 'database.php';
require_once 'recipeFunctions.php';
?>
<div class="src-div" onclick="displayIngredients(0)">
    <div class="src-type-icon">
        <img class="src-icon" src="../images/vegetable.png" alt="Vegetables" />
    </div>

    <div class="src-type">
        <p>Vegetables</p>
    </div>
    <div class="src-plus">
        <p>+</p>
    </div>
</div>
<form class="tags">
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'vegetable') ?>
    </div>
    <div class="src-div" onclick="displayIngredients(1)">
        <div class="src-type-icon">
            <img class="src-icon" src="../images/fruits.png" alt="Fruits" />
        </div>
        <div class="src-type">
            <p>Fruits</p>
        </div>
        <div class="src-plus">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'fruit') ?>

    </div>
    <div class="src-div" onclick="displayIngredients(2)">
        <div class="src-type-icon">
            <img class="src-icon" src="../images/meat.png" alt="Meats" />
        </div>
        <div class="src-type">
            <p>Meats</p>
        </div>
        <div class="src-plus">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'meat') ?>

    </div>
    <div class="src-div" onclick="displayIngredients(3)">
        <div class="src-type-icon">
            <img class="src-icon" src="../images/fish.png" alt="Fish" />
        </div>
        <div class="src-type">
            <p>Fish</p>
        </div>
        <div class="src-plus">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'fish') ?>

    </div>
    <div class="src-div" onclick="displayIngredients(4)">
        <div class="src-type-icon">
            <img class="src-icon" src="../images/shrimp.png" alt="Seafood" />
        </div>
        <div class="src-type">
            <p>Seafood</p>
        </div>
        <div class="src-plus">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'seafood') ?>
    </div>
    <div class="src-div" onclick="displayIngredients(5)">
        <div class="src-type-icon">
            <img class="src-icon" src="../images/food.png" alt="Dairy" />
        </div>
        <div class="src-type">
            <p>Dairy</p>
        </div>
        <div class="src-plus">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'dairy') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(6) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/soy-milk.png " alt="Dairy Alternatives " />
        </div>
        <div class="src-type ">
            <p>Dairy Alternatives</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'dairy alt') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(7) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/peas.png " alt="Legumes " />
        </div>
        <div class="src-type ">
            <p>Legumes</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'legumes') ?>

    </div>
    <div class="src-div " onclick="displayIngredients(8) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/bake.png " alt="Baking and Grains " />
        </div>
        <div class="src-type ">
            <p>Baking and Grains</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'baking and grains') ?>

    </div>
    <div class="src-div " onclick="displayIngredients(9) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/seasoning.png " alt="Seasonings " />
        </div>
        <div class="src-type ">
            <p>Seasonings</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'seasoning') ?>

    </div>
    <div class="src-div " onclick="displayIngredients(10) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/sauces.png " alt="Sauces " />
        </div>
        <div class="src-type ">
            <p>Sauces</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'sauce') ?>

    </div>
    <div class="src-div " onclick="displayIngredients(11) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/peanut.png " alt="Nuts " />
        </div>
        <div class="src-type ">
            <p>Nuts</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'nut') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(12) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/olive-oil.png " alt="Oils " />
        </div>
        <div class="src-type ">
            <p>Oils</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'oil') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(13) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/honey.png " alt="Sweeteners " />
        </div>
        <div class="src-type ">
            <p>Sweeteners</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'sweet') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(14) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/alcohol.png " alt="Alcohol " />
        </div>
        <div class="src-type ">
            <p>Alcohol</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'alcohol') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(15) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/chocolate.png " alt="Deserts and Snacks " />
        </div>
        <div class="src-type ">
            <p>Deserts and Snacks</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'desert') ?>
    </div>
    <div class="src-div " onclick="displayIngredients(16) ">
        <div class="src-type-icon ">
            <img class="src-icon " src="../images/beverage.png " alt="Beverage " />
        </div>
        <div class="src-type ">
            <p>Beverages</p>
        </div>
        <div class="src-plus ">
            <p>+</p>
        </div>
    </div>
    <div class="src-ingredients">
        <?php displayIngredients($connection, 'beverage') ?>
    </div>
</form>