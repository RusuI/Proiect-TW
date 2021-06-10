<?php
require_once '../includes/database.php';
require_once '../includes/userFunctions.php';

?>

<!DOCTYPE html>
<html lang="en">

<!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Recipe | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/search.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

</head>
    <body onload="loadCookies()">
        <!--Navigation Bar-->
        <nav>
            <div class="logo">
                <h1>Search</h1>
            </div>
            <div class="opnMenu">
                <div onclick="menu()"><i class="fa fa-bars"></i></div>
                <div class="filter-options-content">
                    <a href="home.php">Home</a>
                    <a href="faq.php">Help</a>
                    <a href="popular.php">See most popular</a>
                    <a href="addRecipe.php">Add Recipe</a>
                    <?php
                    if (isset($_SESSION["id"])) {

                        echo "<a href='../views/profile.php'>My Profile</a>";
                    } else {
                        echo "<a href='../views/login.php'>Join Us</a>";
                    }
                    ?>
                    <div id="src-btton" onclick="search()"><a href="#">Search</a></div>
                </div>
            </div>
            <ul class="mainMenu">
                <li><a href="home.php">Home</a></li>
                <li><a href="faq.php">Help</a></li>
                <li><a href="popular.php">See most popular</a></li>
                <li> <a href="addRecipe.php">Add Recipe</a></li>
                <?php
                if (isset($_SESSION["id"])) {

                    echo "<li><a href='../views/profile.php'>My Profile</a></li>";
                } else {
                    echo "<li><a href='../views/login.php'>Join Us</a></li>";
                }
                ?>
                <li>
                    <div class="closeMenu">
                        <i class="fa fa-times"></i>
                    </div>
                </li>
            </ul>
        </nav>

        <!--End of Navigation Bar-->

        <!--Side Bar-->

        <aside id="myAside">
            <!--custom check marks-->
            <div>
                <ul class="src-menu">
                    <li id="wantedButton" onclick="switchVisible(0)" style="background: orange;">
                        Wanted
                    </li>
                    <li id="unwantedButton" onclick="switchVisible(1)">
                        Unwanted
                    </li>
                </ul>
            </div>
            <div>
                <div id="wanted">
                    <h1>Enter your ingredients:</h1>
                </div>
                <div id="unwanted">
                    <h1>Enter ingredients you don't want:</h1>
                </div>
                <?php
                require "../includes/ingredients.php";
                ?>
            </div>
        </aside>

        <!--End of Side Bar-->

        <main>
            <div id="filter-recipes">
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(1)">Difficulty</button>
                    <div class="filter-options-content">
                        <a href="#" id="diff1">Easy</a>
                        <a href="#" id="diff2">Medium</a>
                        <a href="#" id="diff3">Difficult</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(2)">Preparation Time</button>
                    <div class="filter-options-content">
                        <a href="#" id="ptime1">Around 2h</a>
                        <a href="#" id="ptime2">Around 1h</a>
                        <a href="#" id="ptime3">Around 30 min</a>
                        <a href="#" id="ptime4">Around 10 min</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(3)">Cooking Time</button>
                    <div class="filter-options-content">
                        <a href="#" id="ctime1">Around 2h</a>
                        <a href="#" id="ctime2">Around 1h</a>
                        <a href="#" id="ctime3">Around 30 min</a>
                        <a href="#" id="ctime4">Around 10 min</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(4)">Servings</button>
                    <div class="filter-options-content">
                        <a href="#" id="serv1">1 servings</a>
                        <a href="#" id="serv2">2-3 servings</a>
                        <a href="#" id="serv3">4-5 servings</a>
                        <a href="#" id="serv4">6-8 servings</a>
                        <a href="#" id="serv5">More</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" style="display: inline; float:right;" onclick="displayOptions(5)">Sort<i class="fas fa-sort"></i></button>
                    <div class="filter-options-content" style="margin-top:50px;">
                        <a href="#" id="sort1">By Popularity</a>
                        <a href="#" id="sort2">By Preparation Time</a>
                        <a href="#" id="sort3">By Cooking time</a>
                        <a href="#" id="sort4">By Servings</a>
                    </div>
                </div>
            </div>

            <section id="user-src">
            </section>
            <section id="result">
                <div class="result-wrapper" id="result-div">
                   
                </div>
            </section>
        </main>

        <!--Footer section-->

        <footer class="footer ">
            <div class="section-center ">
                <p class="text ">
                    &copy; <span>What The Food Project</span>
                </p>
            </div>
        </footer>



        <!--End of Cards Section-->

        <script src="../javascript/search.js"></script>
        <script src="../javascript/app.js"></script>

    </body>

</html>