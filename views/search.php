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
<!--sort-->
<!-- top sticky    button that takes you to top load more-->
<!--footer when there is nothing div -->
    <body>
        <!--Navigation Bar-->
        <nav>
            <div class="logo">
                <h1>Search</h1>
            </div>
            <div class="opnMenu">
                <div onclick="menu()"><i class="fa fa-bars"></i></div>
                <div class="filter-options-content">
                    <a href="home.html">Home</a>
                    <a href="faq.html">Help</a>
                    <a href="popular.html">See most popular</a>
                    <a href="addRecipe.html">Add Recipe</a>
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
                <li><a href="home.html">Home</a></li>
                <li><a href="faq.html">Help</a></li>
                <li><a href="popular.html">See most popular</a></li>
                <li> <a href="addRecipe.html">Add Recipe</a></li>
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
                <div id="wanted" style="padding:2% 0 2% 0; text-align:center;">
                    <h1>Enter your ingredients:</h1>
                </div>
                <div id="unwanted">
                    <h1>Enter ingredients you don't want:</h1>
                </div>
                <?php
                require "../includes/ingredients.php"
                ?>
            </div>
        </aside>

        <!--End of Side Bar-->

        <main>
            <div id="filter-recipes">
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(1)">Difficulty</button>
                    <div class="filter-options-content">
                        <a href="#">Easy</a>
                        <a href="#">Medium</a>
                        <a href="#">Difficult</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(2)">Preparation Time</button>
                    <div class="filter-options-content">
                        <a href="#">Around 2h</a>
                        <a href="#">Around 1h</a>
                        <a href="#">Around 30 min</a>
                        <a href="#">Around 10 min</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(3)">Cooking Time</button>
                    <div class="filter-options-content">
                        <a href="#">Around 2h</a>
                        <a href="#">Around 1h</a>
                        <a href="#">Around 30 min</a>
                        <a href="#">Around 10 min</a>
                    </div>
                </div>
                <div class="filter-container">
                    <button class="filter-menus" onclick="displayOptions(4)">Servings</button>
                    <div class="filter-options-content">
                        <a href="#">1 servings</a>
                        <a href="#">2-3 servings</a>
                        <a href="#">4-5 servings</a>
                        <a href="#">6-8 servings</a>
                    </div>
                </div>
            </div>

            <section id="user-src">
                <h1>You Searched For:</h1>
                <div class="tag">
                    <p>
                        <a href="#"> <i class="fas fa-times"></i></a>
                        tomato
                    </p>
                </div>
                <div class="tag">
                    <p>
                        <a href="#"> <i class="fas fa-times"></i></a>
                        potato
                    </p>
                </div>
                <div class="tag">
                    <p>
                        <a href="#"> <i class="fas fa-times"></i></a>
                        milk
                    </p>
                </div>
                <div class="tag">
                    <p>
                        <a href="#"> <i class="fas fa-times"></i></a>
                        Easy
                    </p>
                </div>
            </section>
            <section id="result">
                <div class="result-wrapper">
                   
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