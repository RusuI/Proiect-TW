<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guacamole | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap">
    <link rel="stylesheet" href="../css/guacamole.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        .about .image {
            background: url('../images/guacamole.jpeg') center/cover no-repeat;
        }
    </style>
</head>

<body>

    <!--Navigation Bar-->


    <nav>
        <div class="logo">
            <h1>Welcome!</h1>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
            <li><a href="../views/search.php">Search</a></li>
            <li><a href="../views/addRecipe.php">Add Recipe</a></li>
            <li><a href="../views/profile.php">My Profile</a></li>
            <li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
            </li>
            <li> <span class="icons">
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
                            <a class="user" href="#"><i class="fas fa-user" aria-hidden="true"></i>Sara Smith</a>
                        </span>
                        <!--review -->
                        <div class="recipereview">
                            <div class="recipeRating">
                                <span class="fa fa-star checked star"></span>
                                <span class="fa fa-star checked star"></span>
                                <span class="fa fa-star checked star"></span>
                                <span class="fa fa-star star"></span>
                                <span class="fa fa-star star"></span>

                            </div>
                            <h3 class="numberPhotos"><a class="numberPhotos" href="#gallery"> 3 Photos</a></h3>
                        </div>
                        <!-- End review -->
                        <!--heart button-->
                        <div class="heart"><a href="#" class="heart"><i class="far fa-heart"></i></a> <span class="label-heart">Save</span></div>
                        <!--End of heart button-->
                    </div>

                    <div class="content" data-aos="fade-left">
                        <h3>Tasty guacamole</h3>
                        <p>The perfect choice for an easy to make,healthy and very tasty snack for all those avocado lovers out there!
                        </p>

                    </div>




                </section>

            </div>

            <!-- about section ends -->

            <!--Numbers-->
            <div id="numbers">

                <article class="number">
                    <i class="fas fa-utensils"></i>
                    <p>7 mins</p>
                    <h3>Preparation Time</h3>
                </article>

                <article class="number">
                    <i class="fas fa-cheese"></i>
                    <p>3 mins</p>
                    <h3>Cooking Time</h3>

                </article>
                <article class="number">
                    <i class="fas fa-user"></i>
                    <p>2</p>
                    <h3>Serves</h3>

                </article>
                <article class="number">
                    <i class="fas fa-circle"></i>
                    <p>Easy</p>
                    <h3>Difficulty</h3>

                </article>


            </div>
            <!--End of Numbers-->


            <!--Ingredients and prepare -->




            <section class="menu" id="menu">

                <h1 class="heading"> <span>Ingredients & Preparation </span> </h1>

                <ul class="list" data-aos="fade-down">
                    <li class="btn" data-src="../images/menu1.jpg">3 ripe avocados, peeled and pitted</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 jalape??o (or serrano pepper instead)</li>
                    <li class="btn" data-src="../images/menu1.jpg">Diced red onion</li>
                    <li class="btn" data-src="../images/menu1.jpg">Cilantro</li>
                    <li class="btn" data-src="../images/menu1.jpg">Lime juice</li>
                    <li class="btn" data-src="../images/menu1.jpg">Fine sea salt</li>
                    <li class="btn" data-src="../images/menu1.jpg">Ground cumin</li>
                    <li class="btn" data-src="../images/menu1.jpg">Diced tomatoes</li>
                </ul>

                <div class="row" data-aos="fade-right">

                    <div class="image" data-aos="fade-left">
                        <img src="../images/avocados.jpeg" id="menu-img" alt="">
                    </div>

                    <div class="content">
                        <div class="info">
                            <h3> <span>01.</span> Step 1 </h3>
                            <p>Mash your avocados: Add them to a large mixing bowl and mash with a fork or spoon until they reach your desired consistency. (I like mine slightly chunky, not completely smooth.)</p>
                        </div>
                        <div class="info">
                            <h3> <span>02.</span> Step 2</h3>
                            <p>Mix in the remaining ingredients: Add in the onion, cilantro, jalape??o (or serrano), lime juice, salt, cumin, and tomatoes (if using) and stir until combined.</p>
                        </div>
                        <div class="info">
                            <h3> <span>03.</span>Step 3</h3>
                            <p>Taste and season: Give the mixture a taste, and season with extra salt if needed. Now get ready to serve and enjoy!</p>
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
                        <img src="../images/cristina.jpeg" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> Cristina
                        </span>
                        <h3>Super tasty! Definetely recommend it.</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/mara.jpeg" alt="">

                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> Mara
                        </span>
                        <h3>I've tried it and it's awesome!I love avocados.</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/joe.jpeg" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John
                        </span>
                        <h3>Very easy recipe.</h3>

                    </div>
                </div>

            </section>

            <!-- gallery section ends -->
            <!-- order section starts  -->

            <section class="order" id="order">

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

            <!-- order section ends -->

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
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
</body>

</html>