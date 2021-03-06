<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/homestyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/image1.jpg') center/cover no-repeat fixed;
        }

        .menu-image {
            background: url('../images/image2.jpeg') center/cover fixed no-repeat;
            min-height: 80vh;
        }


        .number {

            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/image3.jpeg') center/cover no-repeat fixed;

        }
    </style>

</head>

<body>

    <!--Navigation Bar-->


    <nav>
        <div class="logo">
            <h2>Welcome!</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="#">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
            <li><a href="../views/search.php">Get started</a></li>
            <?php
            if (isset($_SESSION["id"])) {

                echo "<li><a href='../views/profile.php'>My Profile</a></li>";
            } else {
                echo "<li><a href='../views/login.php'>Join Us</a></li>";
            }
            ?>
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

    <!--Header-->
    <header class="header">
        <div class="hero">
            <?php
            if (isset($_SESSION["id"])) {
                echo "<h1 class='title'>What's cookin' , " . $_SESSION["username"] .  "?</h1>";
            } else {
                echo "<h1 class='title'>What's cookin'?</h1>";
            }

            ?>
            <a href="../views/search.php" class="hero-button pulsate">Pick Ingredients</a>
        </div>
    </header>


    <!--End of Header-->

    <!--Categories-->

    <section id="about">
        <div>
            <h2 class="title-text">Categories of Food</h2>
        </div>

        <div class="about-center">
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-mug-hot"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Drinks</h2>
                    <p class="about-info">It's not only about food,isn't it?</p>
                </div>
            </article>


            <!--End of Article-->
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Healthy food</h2>
                    <p class="about-info">You can make delicious recipes according to your lifestyle</p>
                </div>
            </article>


            <!--End of Article-->
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-mortar-pestle"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Organic food</h2>
                    <p class="about-info">You're a vegetarian? We've got your back!</p>
                </div>
            </article>


            <!--End of Article-->
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-drumstick-bite"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Diversity</h2>
                    <p class="about-info">There's something for everybody,no matter the preferences</p>
                </div>
            </article>


            <!--End of Article-->
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Desserts</h2>
                    <p class="about-info">We all need a litte bit of sweetness from time to time</p>
                </div>
            </article>


            <!--End of Article-->
            <!--Start of the Article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-pepper-hot"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Tastes</h2>
                    <p class="about-info">Various dishes from all kind of kitchen all around the world</p>
                </div>
            </article>


            <!--End of Article-->
        </div>

    </section>
    <!--End of Categories-->


    <!--Why us section -->
    <div class="menu" id="menu">
        <div class="menu-image">
        </div>

        <article class="menu-text">
            <div class="menu-text-center">
                <h2>Why choose us?</h2>
                <p>Our goal is to help you make the most delicious,easy to prepare meals out of what you already have in your kitchen! In this way,not only that you are not wasting what is left in your fridge,but with minimum aditional ingredients, you can
                    have a lot of fun,be creative and prepare different sorts of dishes. But there's more to this!</p>
                <ul>
                    <li>Choose you preparation time : how much time you want to spend making a dish?</li>
                    <li>Let us know that you DON'T want the suggested recipes to contain certain ingredients.</li>
                    <li>Add you favorite dishes to a list,so that you can one day recreate them.</li>
                    <li>Help others! Upload pictures and opinions of your own masterpieces!</li>
                </ul>

                <a href="../views/search.php">Get started</a>
            </div>
        </article>

    </div>
    <!-- End of Why us section-->

    <!--Numbers-->
    <div id="numbers">

        <article class="number">
            <i class="fas fa-cloud-meatball"></i>
            <p>50</p>
            <h3>Meat dishes</h3>
        </article>

        <article class="number">
            <i class="fas fa-cheese"></i>
            <p>35</p>
            <h3>Cheese dishes</h3>

        </article>
        <article class="number">
            <i class="fas fa-pizza-slice"></i>
            <p>25</p>
            <h3>Pizzas</h3>

        </article>
        <article class="number">
            <i class="fas fa-ice-cream"></i>
            <p>25</p>
            <h3>Desserts</h3>

        </article>


    </div>
    <!--End of Numbers-->


    <!--Cards Section-->
    <section id="food">
        <div>
            <h2 class="title-text">A variety of dishes to choose from,according to your preferences</h2>
        </div>

        <div class="food-container">
            <!--Article-->
            <article class="food-card">
                <img src="../images/img4.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Simple or sophisticated recipes</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a class="food-button" href="../views/search.php">Get Started</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->

            <!--Article-->
            <article class="food-card">
                <img src="../images/img5.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Choose how much you want to spend in the kitchen!</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a class="food-button" href="../views/search.php">Get Started</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->

            <!--Article-->
            <article class="food-card">
                <img src="../images/img6.jpeg" class="food-img" alt="">
                <div class="img-text">
                    <h2>Try on your own and share with the others!</h2>
                </div>
                <div class="img-footer">
                    <div class="footer-button">
                        <a class="food-button" href="../views/search.php">Get Started</a>
                    </div>
                </div>
            </article>
            <!--End of Article-->
        </div>
    </section>
    <!--End of Cards Section-->

    <!--Footer section-->

    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <script src="../javascript/app.js"></script>
</body>

</html>