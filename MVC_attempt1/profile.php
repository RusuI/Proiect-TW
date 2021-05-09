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
                <li><a href="home.html">Home</a></li>
                <li><a href="faq.html">Help</a></li>
                <li><a href="popular.html">See most popular</a></li>
                <li><a href="search.html">Search</a></li>
                <li><a href="addRecipe.html">Add recipe</a></li>
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
            <p>Hello!</p>
            <p style="margin-bottom: 7%;">Enjoy your cooking!</p>


            <a href="search.html" class="start-btn">Get Started</a>

        </div>
        <!--End of Text-->
    </div>

    <!--About-->
    <div class="about-container">

        <img src="../imagesProfile/girl.jpeg" alt="">

        <div class="about-text">
            <p>About Me</p>
            <p>Hi there, my name is Sara and I'm not a professional cooker but I enjoy letting my creativity free and trying to make the best out of what I have in my kitchen.</p>
            <p style="margin-bottom: 2%;">I wish to get better at cooking and to exercise as many recipes as I can.</p>
            <a href="settings.html" class="my-button">Profile Settings</a>
            <a href="#" class="my-button">Log out</a>
        </div>
    </div>

    <!--End of About-->

    <!--Services-->

    <div class="services">
        <div class="services-text ">
            <p>Menu</p>
            <p>Profile Options</p>
            <p>Check out the options you have below for a great experience on our website!</p>
        </div>
        <!--Boxes-->
        <div class="box-container">


            <!--First box - Favorites-->
            <div class="box-1">
                <span><img src="../imagesProfile/star.png" alt=""></span>
                <p class="heading">Favorites</p>
                <p class="details">Here you can see all the recipes you have in your favorite list.</p>

                <a href="favorites.html" class="my-button">See Favorites</a>
            </div>

            <!--Second box - History-->
            <div class="box-2">
                <span><img src="../imagesProfile/history.png" alt=""></span>
                <p class="heading">History</p>
                <p class="details">Check out your history here.</p>

                <a href="history.html" class="my-button">See History</a>
            </div>

            <!--Third box - My recipes-->
            <div class="box-3">
                <span><img src="../imagesProfile/recipe.png" alt=""></span>
                <p class="heading">My Recipes</p>
                <p class="details">See all your uploaded recepies here.</p>

                <a href="myrecipes.html" class="my-button">See Recipes</a>
            </div>
        </div>
    </div>


    <!--End of Services-->

    <!--Footer-->

    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>


    <script src="../javascript/profile.js"></script>
</body>

</html>