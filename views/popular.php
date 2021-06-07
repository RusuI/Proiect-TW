<!DOCTYPE html>
<html lang="en">

<!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/popular.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h2>Popular</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="#">See most popular</a></li>
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

    <main>
        <div id="menu-popular">
            <button class="filter-popular" onclick="displayPopular(0)" style="background: orange;">Popular Recipes</button>

            <button class="filter-popular" onclick="displayPopular(1)">Popular Ingredients</button>

            <button class="filter-popular" onclick="displayPopular(2)">Unpopular Ingredients</button>
        </div>
        <section>
            <div class="pop-category" style="display: block;">
                <h1 class="pop-header">Recipes</h1>
                <div class="filter-container">
                    <button class="filter-popular" style="display: inline; float:right;" onclick="displayOptions(0)">Download</button>
                    <div class="filter-options-content" style="margin-top:50px;">
                        <a href="#">HTML</a>
                        <a href="#">CSV</a>
                        <a href="#">JSON</a>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="one single-result">
                        <div class="container container-one">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(0)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">1</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!--end of item-->
                    <div class="two single-result">
                        <div class="container container-two">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(1)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">2</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="three single-result">
                        <div class="container container-two">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(2)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">3</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(3)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">4</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(4)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">5</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(5)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">6</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(6)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">7</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(7)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">8</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(8)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank">9</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(9)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 135%; margin-top:3px; margin-left: -2px;">10</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/about-img.jpg" alt="result image" class="result-img">
                            <a href="#"><i class="fas fa-circle" style="display: none;"></i></a>
                            <a href="javascript:void();"><i class="fab fa-gratipay" onclick="liked(10)"></i></a>
                            <p class="result-time">25 min.</p>
                            <p class="result-diff">Easy</p>
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 140%; margin-top:3px; margin-left: -2px;">11</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-user"></i> John Doe
                                </span>
                                <span>
                                    <i class="fas fa-clock"></i> 18 Oct
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Lemon-Ricotta Pancakes</h2>
                            <p class="text-light">If These Pancakes Were Any Lighter, They Would Float Off The Plate--And I Didn't Even Separate The Eggs And Whip The Whites. Also, I Used Water Instead Of Milk--And I Liked Them Better That Way. I Like To Serve These With A
                                Pat Of Butter, A Pinch Of Lemon Zest, And A Drizzle Of Maple Syrup.</p>
                            <a href="../views/recipe.php" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pop-category" style="display: none;">
                <h1 class="pop-header">Ingredients</h1>
                <div class="filter-container">
                    <button class="filter-popular" style="display: inline; float:right;" onclick="displayOptions(1)">Download</button>
                    <div class="filter-options-content" style="margin-top:50px;">
                        <a href="#">HTML</a>
                        <a href="#">CSV</a>
                        <a href="#">JSON</a>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="one single-result">
                        <div class="container container-one">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">1</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!--end of item-->
                    <div class="two single-result">
                        <div class="container container-two">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">2</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="three single-result">
                        <div class="container container-two">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">3</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">4</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">5</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">6</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">7</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">8</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">9</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 135%; margin-top:3px; margin-left: -2px;">10</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/plantnet-category-blueberries.jpg" alt="blueberry" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 140%; margin-top:3px; margin-left: -2px;">11</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-search"></i> 45000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Blueberries</h2>
                            <p class="text-light">Blueberries can be eaten freshly picked or incorporated into a variety of recipes. They can also be purchased frozen. They have been shown to protect against heart disease and cancer, and can also help maintain bone strength,
                                mental health, and healthful blood pressure.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pop-category" style="display: none;">
                <h1 class="pop-header">Most Avoided Ingredients</h1>
                <div class="filter-container">
                    <button class="filter-popular" style="display: inline; float:right;" onclick="displayOptions(2)">Download</button>
                    <div class="filter-options-content" style="margin-top:50px;">
                        <a href="#">HTML</a>
                        <a href="#">CSV</a>
                        <a href="#">JSON</a>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="one single-result">
                        <div class="container container-one">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">1</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>

                        </div>
                    </div>
                    <!--end of item-->
                    <div class="two single-result">
                        <div class="container container-two">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">2</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="three single-result">
                        <div class="container container-two">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">3</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">4</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">5</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">6</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">7</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">8</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank">9</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 135%; margin-top:3px; margin-left: -2px;">10</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                    <!-- end of single item -->
                    <div class="single-result">
                        <div class="container container-rest">
                            <img src="../images/image.webp" alt="spinach" class="result-img">
                            <i class="far fa-star"></i>
                            <p class="rank" style="font-size: 140%; margin-top:3px; margin-left: -2px;">11</p>
                        </div>
                        <div class="single-result-content">
                            <div class="single-result-top">
                                <span>
                                    <i class="fas fa-star" style="margin-right: -0.5rem; margin-left:-0.4rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="fas fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                    <i class="far fa-star" style="margin-right: -0.5rem;"></i>
                                </span>
                                <span>
                                    <i class="fas fa-times"></i>25000
                                </span>
                                <span>
                                    <i class="fas fa-comment"></i> 57
                                </span>
                            </div>

                            <h2 class="text-large">Spinach</h2>
                            <p class="text-light">Spinach is a superfood. It is loaded with tons of nutrients in a low-calorie package. Dark, leafy greens like spinach are important for skin, hair, and bone health. They also provide protein, iron, vitamins, and minerals. The
                                possible health benefits of consuming spinach include improving blood glucose control in people with diabetes, lowering the risk of cancer, and improving bone health, as well as supplying minerals and vitamins that can
                                provide a range of different</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>




    <!--Footer!-->
    <footer class="footer ">
        <div class="section-center ">
            <p class="text ">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <!--End of Footer-->


    <!--End of Cards Section-->

    <script src="../javascript/popular.js "></script>
    <script src="../javascript/app.js"></script>

</body>

</html>