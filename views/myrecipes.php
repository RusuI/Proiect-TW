<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Recipes | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/myrecipes.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        #food {
            padding: 20px;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
        }
    </style>
</head>

<body>

    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h2>My Recipes</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
            <li><a href="../views/search.php">Search</a></li>
            <li><a href="../views/addRecipe.php">Add recipe</a></li>
            <li><a href="../views/profile.php">My Profile</a></li>
            <li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
                <span class="icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-github"></i>
                </span>
            </li>
        </ul>
    </nav>
    <!--End of Navigation Bar-->
    <!--Cards Section-->
    <section id="food">
        <div>
            <h2 class="title-text">Here is a list of all the dishes you posted on our website : </h2>
        </div>

        <div class="food-container">
            <!--Article-->
            <article class="food-card">
                <img src="../images/pasta.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Shrimp Pasta</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a href="../views/pasta.php" class="food-button">See recipe</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->

            <!--Article-->
            <article class="food-card">
                <img src="../images/myguacamole.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Guacamole</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a href="../views/guacamole.php" class="food-button">See recipe</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->

            <!--Article-->
            <article class="food-card">
                <img src="../images/cake.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Strawberry Pretzel Cake</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a href="../views/cake.php" class="food-button">See recipe</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->

            <!--Article-->
            <article class="food-card">
                <img src="../images/salad.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Chicken salad</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a href="../views/salad.php" class="food-button">See recipe</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->
        </div>
    </section>
    <!--End of Cards Section-->

    <!--Footer section-->

    <footer class="footer ">
        <div class="section-center ">
            <p class="text ">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <script src="../javascript/app.js"></script>
</body>

</html>