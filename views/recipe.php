<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemon-Ricotta Pancakes | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="../css/recipe.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        .about .image {
            background: url('../images/about-img.jpg') center/cover no-repeat;
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
            <li><a href="../views/login.php">Join us</a></li>
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
                            <a class="user" href="#"><i class="fas fa-user" aria-hidden="true"></i> John Doe</a>
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
                        <h3>Lemon-Ricotta Pancakes</h3>
                        <p>If these pancakes were any lighter, they would float off the plate--and I didn't even separate the eggs and whip the whites. Also, I used water instead of milk--and I liked them better that way. I like to serve these with a pat
                            of butter, a pinch of lemon zest, and a drizzle of maple syrup.
                        </p>

                    </div>




                </section>

            </div>

            <!-- about section ends -->

            <!--Numbers-->
            <div id="numbers">

                <article class="number">
                    <i class="fas fa-utensils"></i>
                    <p>10 mins</p>
                    <h3>Preparation Time</h3>
                </article>

                <article class="number">
                    <i class="fas fa-cheese"></i>
                    <p>6 mins</p>
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




            <section class="ingredients" id="ingredients">

                <h1 class="heading"> <span>Ingredients & Preparation </span> </h1>

                <ul class="list" data-aos="fade-down">
                    <li class="btn" data-src="../images/menu1.jpg">?? cup cold water or milk</li>
                    <li class="btn" data-src="../images/menu1.jpg">?? teaspoon baking soda</li>
                    <li class="btn" data-src="../images/menu1.jpg">?? cup ricotta cheese</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 tablespoon grated lemon zest (just the yellow part of the skin)
                    </li>
                    <li class="btn" data-src="../images/menu1.jpg">1 tablespoon vegetable oil</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 tablespoon white sugar</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 large egg</li>
                    <li class="btn" data-src="../images/menu1.jpg">??? teaspoon vanilla extract</li>
                    <li class="btn" data-src="../images/menu1.jpg">2 tablespoons melted butter</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 tablespoon lemon juice</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 cup self-rising flour</li>
                </ul>

                <div class="row" data-aos="fade-right">

                    <div class="image" data-aos="fade-left">
                        <img src="../images/image.jfif" id="menu-img" alt="">
                    </div>

                    <div class="steps">
                        <div class="info">
                            <h3> <span>01.</span> Step 1 </h3>
                            <p>Whisk water and baking soda together in a mixing bowl. Add ricotta cheese, lemon zest, vegetables oil, sugar, egg, and vanilla. Whisk until smooth, breaking up lumps of cheese as you mix. Add melted butter, lemon juice, and
                                1 cup plus 2 tablespoons self-rising flour. Whisk together, stirring until most of flour disappears into the batter.</p>
                        </div>
                        <div class="info">
                            <h3> <span>02.</span> Step 2</h3>
                            <p>Let batter sit at room temperature about 15 minutes.</p>
                        </div>
                        <div class="info">
                            <h3> <span>03.</span>Step 3</h3>
                            <p>Heat lightly greased cast iron skillet or griddle over medium-high heat. Portion out 1/4 cup scoops of batter onto skillet (cook in batches). When bubbles begin to form on the surface and the edges of the pancakes start to
                                look dry (2 to 3 minutes), flip and cook other side until cooked through, 2 to 3 minutes. Transfer to a warm plate.</p>
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
                        <img src="../images/image(7).jfif" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>Super reteta!!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/image.jfif" alt="">

                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>I've tried it and it's awesome!!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/about-img.jpg" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>Awesome!!</h3>

                    </div>
                    <div class="box" data-aos="fade-up">
                        <img src="../images/about-img.jpg" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> John Doe
                        </span>
                        <h3>Awesome!!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/about-img.jpg" alt="">
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
    <script src="../javascript/app.js"></script>

    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
</body>

</html>