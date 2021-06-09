<?php
session_start();
include("../includes/recipe.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strawberry Pretzel Salad |WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="../css/recipe1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        .about .image {
            background: url('../images/1.jpg') center/cover no-repeat;
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
            <li><a href="faq.php">Help</a></li>
            <li><a href="popular.php">See most popular</a></li>
            <li><a href="search.php">Get started</a></li>
            <?php
            if (isset($_SESSION["id"])) {
                echo "<li><a href='addRecipe.php'>Add Recipe</a></li>";
                echo "<li><a href='profile.php'>My Profile</a></li>";
            } else {
                echo "<li><a href='login.php'>Join Us</a></li>";
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
    <!--End of Navigation Bar-->
    <div class="container">
        <div class="box-container">

            <!--SAVE TO FAVOURITES-->

            <!--END SAVE TO FAVOURITES-->
            <!-- about recipe  -->
            <div>
                <section class="about" id="about">
                    <div class="image" data-aos="fade-right"></div>
                    <div class=line>
                        <span class="user">
                            <a class="user" href="#"><i class="fas fa-user" aria-hidden="true"></i><?php echo $recipeAuthor;  ?></a>
                        </span>
                        <!--review -->
                        <div class="recipereview">

                            <h3 class="numberPhotos"><a class="numberPhotos" href="#gallery"> 3 Photos</a></h3>

                        </div>
                        <!-- End review -->
                        <!--heart button-->
                        <?php
                        if (isset($_SESSION['id'])) {
                            echo " <div id='add-fav' class='heart'><a href='javascript:void(0)' onclick='addToFavorites()'><i class='far fa-heart'></i></a> <span class='label-heart'>Add to favorites</span></div>";
                            echo " <div id='is-fav' class='heart' style='display: none;'><a href='javascript:void(0)'><i class='fas fa-heart'></i></a></div>";
                        }
                        ?>
                    </div>

                    <div class="steps" data-aos="fade-left">
                        <h3><?php echo $recipeInfo['name'] ?></h3>
                        <p><?php echo $recipeInfo['description'] ?>
                        </p>

                    </div>
                </section>

            </div>

            <!-- about section ends -->

            <!--Numbers-->
            <div id="numbers">

                <article class="number">
                    <i class="fas fa-utensils"></i>
                    <p><?php echo $recipeInfo['prep_time'] ?>mins</p>
                    <h3>Preparation Time</h3>
                </article>

                <article class="number">
                    <i class="fas fa-cheese"></i>
                    <p><?php echo $recipeInfo['cook_time'] ?>mins</p>
                    <h3>Cooking Time</h3>

                </article>
                <article class="number">
                    <i class="fas fa-user"></i>
                    <p><?php echo $recipeInfo['serv'] ?></p>
                    <h3>Serves</h3>

                </article>
                <article class="number">
                    <i class="fas fa-circle"></i>
                    <p><?php echo $recipeInfo['diff'] ?></p>
                    <h3>Difficulty</h3>

                </article>


            </div>
            <!--End of Numbers-->


            <!--Ingredients and prepare -->

            <section class="ingredients" id="ingredients">

                <h1 class="heading"> <span>Ingredients & Preparation </span> </h1>

                <ul class="list" data-aos="fade-down">
                    <?php while ($row = mysqli_fetch_array($recipeIngredients, MYSQLI_NUM)) { ?>
                        <li class="btn" data-src="../images/menu1.jpg"><?php echo $row[0] . " " . $row[1] . " " .  "" . $row[2] ?> </li>
                    <?php } ?>
                </ul>

                <div class="row" data-aos="fade-right">

                    <div class="image" data-aos="fade-left">
                        <img src="../images/2.jpg" id="menu-img" alt="">
                    </div>

                    <div class="steps">
                        <div class="info">
                            <?php while ($row = mysqli_fetch_array($recipeSteps)) { ?>
                                <h3> <span> Step <?php echo $row['step_nr']; ?></span> </h3>
                                <p> <?php echo $row['step_details']; ?></p>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>

            <!--Ingredients and prepare -->
            <!-- gallery section starts  -->

            <section class="gallery" id="gallery">
                <h1 class="heading"> Recipe <span>gallery</span> </h1>

                <div class="box-container">


                    <div class="box" data-aos="fade-up">
                        <img src="../images/cake1.jfif" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>Super reteta!!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/cake2.jfif" alt="">

                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>I've tried it and it's awesome!!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/cake3.jfif" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>Awesome!!</h3>

                    </div>

                </div>

            </section>

            <!-- gallery section ends -->
            <!-- add-photo section starts  -->

            <section class="add-photo" id="add-photo">

                <h1 class="heading"> Post your dish</h1>

                <div class="row">

                    <form action="/action_page.php" data-aos="fade-right">
                        <input type="text" placeholder="your name" class="box">

                        <textarea name="1" id="1" maxlength="50" cols="30" rows="10" class="box address" placeholder="your opinion"></textarea>
                        <input type="submit" value="Post now" class="btn">
                    </form>
                    <div class="photo">
                        <h2>Upload your photo</h2>

                        <form action="/action_page.php" class="upload">
                            <input type="file" id="myFile" name="filename">
                            <input type="submit" class="btn">
                        </form>
                    </div>
                </div>

            </section>

            <!-- add-photo section ends -->

        </div>
    </div>


    <!--Footer section-->

    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>


    <!-- aos js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!--End of Cards Section-->
    <script src="../javascript/app.js"></script>

    <script>
        let userId = "<?php echo $_SESSION["id"] ?>";
        let recipeId = "<?php echo $recipeId ?>";

        console.log(userId);
        console.log(recipeId);

        function addToFavorites() {
            const endpoint = "../includes/addFavorites.inc.php";
            const formData = new FormData();

            formData.append("userId", userId);
            formData.append("recipeId", recipeId);

            fetch(endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                    },
                    body: formData
                })
                .then(response => response.text())
                .then(function(html) {
                    console.log(html);
                    // alert("Successfully added to favorites!");
                    displayHeart();
                });

        }

        function display(x) {
            if (x.style.display == "") {
                x.style.display = "none";
                console.log("hei");
            }
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function displayHeart() {

            fav = document.getElementById("add-fav");
            console.log(fav.style.display);
            display(fav);
            isFav = document.getElementById("is-fav");
            display(isFav);


        }

    
    </script>
    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
</body>

</html>