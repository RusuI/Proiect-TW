

<?php include("../includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/profile.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        .section,
        .services {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
        }

        .box-1,
        .box-2,
        .box-3 {
            background-image: url('../images/food-box.jpeg');
        }
    </style>
</head>

<body>

    <!--Navigation Bar-->

    <div class="section">
        <nav>
            <div class="logo">
                <h2>Profile</h2>
            </div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="../views/home.php">Home</a></li>
                <li><a href="../views/faq.php">Help</a></li>
                <li><a href="../views/popular.php">See most popular</a></li>
                <li><a href="../views/search.php">Search</a></li>
                <li><a href="../views/addRecipe.php">Add recipe</a></li>
                <li><a href="#">My Profile</a></li>
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

        <!--Text-->
        <div class="text-container">
            <?php
            if (!isset($_SESSION["username"])) {
                echo "<p style='font-size: 30px;'>Hello!</p>";
            } else {
                echo "<p style='font-size: 30px;'>Hello " . $_SESSION["username"] . " !</p>";
            }
            ?>
            <p style="margin-bottom: 7%;">Enjoy your cooking!</p>


            <a href="../views/search.php" class="start-btn" style="text-decoration: none;">Start Cooking</a>

        </div>
        <!--End of Text-->
    </div>

    <!--About-->
    <div class="about-container">

        <div> <?php echo '<img src="../imagesLogin/' . $row['image'] . '" alt="">' ?> </div>

        <div class="about-text">
            <p>About Me</p>
            <p style="margin-bottom: 2%;"><?php echo $row['description'] ?> </p>
            <a href="../views/settings.php" class="my-button">Profile Settings</a>
            <a href="../includes/logout.inc.php" class="my-button">Log out</a>
        </div>
    </div>

    <!--End of About-->

    <!--Options-->

    <div class="services">
        <div class="services-text ">
            <p>Profile Options</p>
            <p style="font-size: 25px; line-height: 20px;">Check out the options you have below for a great experience on our website!</p>
        </div>
        <!--Boxes-->
        <div class="box-container">


            <!--First box - Favorites-->
            <div class="box-1">
                <span><img src="../images/star.png" alt=""></span>
                <p class="heading">Favorites</p>
                <p class="details">Here you can see all the recipes you have in your favorite list.</p>

                <a href="../views/favorites.php" class="my-button">See Favorites</a>
            </div>

            <!--Second box - History-->
            <div class="box-2">
                <span><img src="../images/history.png" alt=""></span>
                <p class="heading">History</p>
                <p class="details">Check out your history here.</p>

                <a href="../views/history.php" class="my-button">See History</a>
            </div>

            <!--Third box - My recipes-->
            <div class="box-3">
                <span><img src="../images/recipe.png" alt=""></span>
                <p class="heading">My Recipes</p>
                <p class="details">See all your uploaded recepies here.</p>

                <a href="../views/myrecipes.php" class="my-button">See Recipes</a>
            </div>
        </div>
    </div>


    <!--End of Options-->

    <!--Footer-->

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