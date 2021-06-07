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
       <?php
       require 'navbar.php';
       ?>

        <!--End of Navigation Bar-->

        <!--Text-->
        <div class="text-container">
            <p>Hello!</p>
            <p style="margin-bottom: 7%;">Enjoy your cooking!</p>


            <a href="../views/search.php" class="start-btn">Get Started</a>

        </div>
        <!--End of Text-->
    </div>

    <!--About-->
    <div class="about-container">

        <img src="../images/girl.jpeg" alt="">

        <div class="about-text">
            <p>About Me</p>
            <p>Hi there, my name is Sara and I'm not a professional cooker but I enjoy letting my creativity free and trying to make the best out of what I have in my kitchen.</p>
            <p style="margin-bottom: 2%;">I wish to get better at cooking and to exercise as many recipes as I can.</p>
            <a href="../views/settings.php" class="my-button">Profile Settings</a>
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


    <!--End of Services-->

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