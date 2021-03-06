<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap">
    <link rel="stylesheet" href="../css/cake.css">
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
            <h1>Welcome!</h1>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
            <li><a href="../views/search.php">Search</a></li>
            <li><a href="../views/search.php">Join us</a></li>
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
                            <a class="user" href="#"><i class="fas fa-user" aria-hidden="true"></i> Sara Smith</a>
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
                        <h3>Strawberry Pretzel Cake</h3>
                        <p>It is a dessert, but isn't too sweet, nor too salty. It is really pretty when you put it in a clear ovenproof dish.
                        </p>

                    </div>




                </section>

            </div>

            <!-- about section ends -->

            <!--Numbers-->
            <div id="numbers">

                <article class="number">
                    <i class="fas fa-utensils"></i>
                    <p>35 mins</p>
                    <h3>Preparation Time</h3>
                </article>

                <article class="number">
                    <i class="fas fa-cheese"></i>
                    <p>10 mins</p>
                    <h3>Cooking Time</h3>

                </article>
                <article class="number">
                    <i class="fas fa-user"></i>
                    <p>12</p>
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
                    <li class="btn" data-src="../images/menu1.jpg">2 (10 ounce) packages frozen strawberries</li>
                    <li class="btn" data-src="../images/menu1.jpg">2 cups crushed pretzels</li>
                    <li class="btn" data-src="../images/menu1.jpg">?? cup butter, melted</li>
                    <li class="btn" data-src="../images/menu1.jpg">3 tablespoons white sugar</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 (8 ounce) package cream cheese, softened</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 cup white sugar</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 (8 ounce) container frozen whipped topping, thawed
                    </li>
                    <li class="btn" data-src="../images/menu1.jpg">2 (3 ounce) packages strawberry flavored Jell-O??</li>
                    <li class="btn" data-src="../images/menu1.jpg">2 cups boiling water</li>
                    <li class="btn" data-src="../images/menu1.jpg">1 cup self-rising flour</li>
                </ul>

                <div class="row" data-aos="fade-right">

                    <div class="image" data-aos="fade-left">
                        <img src="../images/2.jpg" id="menu-img" alt="">
                    </div>

                    <div class="content">
                        <div class="info">
                            <h3> <span>01.</span> Step 1 </h3>
                            <p>Preheat oven to 400 degrees F (200 degrees C).</p>
                        </div>
                        <div class="info">
                            <h3> <span>02.</span> Step 2</h3>
                            <p>Stir together crushed pretzels, melted butter and 3 tablespoons sugar; mix well and press mixture into the bottom of a 9x13 inch baking dish.</p>
                        </div>
                        <div class="info">
                            <h3> <span>03.</span>Step 3</h3>
                            <p>Bake 8 to 10 minutes, until set. Set aside to cool.</p>
                        </div>
                        <div class="info">
                            <h3> <span>04.</span>Step 4</h3>
                            <p>In a large mixing bowl cream together cream cheese and 1 cup sugar. Fold in whipped topping. Spread mixture onto cooled crust.</p>
                        </div>
                        <div class="info">
                            <h3> <span>05.</span>Step 5</h3>
                            <p>Dissolve gelatin in boiling water. Stir in still frozen strawberries and allow to set briefly. When mixture is about the consistency of egg whites, pour and spread over cream cheese layer. Refrigerate until set.</p>
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