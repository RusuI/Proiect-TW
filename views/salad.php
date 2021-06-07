<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken Salad | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap">
    <link rel="stylesheet" href="../css/salad.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
    <style>
        .about .image {
    background: url('../images/salad.jpeg') no-repeat;
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
                                <span class="fa fa-star checked star"></span>
                                <span class="fa fa-star checked star"></span>

                            </div>
                            <h3 class="numberPhotos"><a class="numberPhotos" href="#gallery"> 4 Photos</a></h3>
                        </div>
                        <!-- End review -->
                        <!--heart button-->
                        <div class="heart"><a href="#" class="heart"><i class="far fa-heart"></i></a> <span class="label-heart">Save</span></div>
                        <!--End of heart button-->
                    </div>

                    <div class="content" data-aos="fade-left">
                        <h3>The Best Chicken Salad</h3>
                        <p>This easy Chicken Salad is always a favorite no matter how it’s served! Delicious on its own, this easy recipe can also be enjoyed on a croissant, in a wrap, or served in a lettuce cup. You seriously can’t go wrong! Chicken, apples,
                            grapes, pecans and celery are tossed in a flavorful, creamy dressing that takes just minutes to prepare!
                        </p>

                    </div>
                </section>

            </div>

            <!-- about section ends -->

            <!--Numbers-->
            <div id="numbers">

                <article class="number">
                    <i class="fas fa-utensils"></i>
                    <p>15 mins</p>
                    <h3>Preparation Time</h3>
                </article>

                <article class="number">
                    <i class="fas fa-cheese"></i>
                    <p>20 mins</p>
                    <h3>Cooking Time</h3>

                </article>
                <article class="number">
                    <i class="fas fa-user"></i>
                    <p>4</p>
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
                    <li class="btn" data-src="../images/menu1.jpg">Cooked chicken</li>
                    <li class="btn" data-src="../images/menu1.jpg">Seedless red grapes </li>
                    <li class="btn" data-src="../images/menu1.jpg">Red apple</li>
                    <li class="btn" data-src="../images/menu1.jpg">Nuts</li>
                    <li class="btn" data-src="../images/menu1.jpg">Mayonnaise</li>
                    <li class="btn" data-src="../images/menu1.jpg">Lemon</li>
                    <li class="btn" data-src="../images/menu1.jpg">Fresh parsley</li>
                    <li class="btn" data-src="../images/menu1.jpg">Kosher salt and freshly ground pepper to taste</li>
                </ul>

                <div class="row" data-aos="fade-right">

                    <div class="image" data-aos="fade-left">
                        <img src="../images/salad2.jpeg" id="menu-img" alt="">
                    </div>

                    <div class="content">
                        <div class="info">
                            <h3> <span>01.</span> Step 1 </h3>
                            <p>Prepare the dressing: In a medium bowl, combine mayonnaise, lemon juice, parsley, salt and pepper. Stir until smooth and creamy.</p>
                        </div>
                        <div class="info">
                            <h3> <span>02.</span> Step 2</h3>
                            <p>In a separate bowl, combine chicken, grapes, apple, celery, and pecans. </p>
                        </div>
                        <div class="info">
                            <h3> <span>03.</span>Step 3</h3>
                            <p>Drizzle dressing over the top and stir together making sure the dressing is evenly distributed. Cover and chill for at least one hour before serving. </p>
                        </div>
                        <div class="info">
                            <h3> <span>04.</span>Step 4</h3>
                            <p>Serve as sandwiches on bread or croissants or as chicken salad lettuce cups.</p>
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
                        <img src="../images/first.jpg" alt="">
                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> Mary
                        </span>
                        <h3>Very easy and tasty recipe!</h3>

                    </div>

                    <div class="box" data-aos="fade-up">
                        <img src="../images/second.jpeg" alt="">

                        <span class="user-name">
                            <i class="fas fa-user" aria-hidden="true"></i> Tom
                        </span>
                        <h3>Nice</h3>

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