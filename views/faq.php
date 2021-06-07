<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/faq.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
        }
    </style>

</head>

<body>

    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h2>FAQ</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
            <li><a href="../views/search.php">Search</a></li>
            <li><a href="../views/addRecipe.php">Add recipe</a></li>
            <li><a href="../views/login.php">My Profile</a></li>
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

    <!--FAQ-->
    <div class="container">
        <h1>FAQ</h1>

        <div class="accordion" data-aos="fade-left">
            <div class="accordion-item" data-aos="fade-right">
                <div class="accordion-item-header">
                    What if I'm not looking for any particular recipe?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        That is not a problem! We will recommend you recipes according to your past searches or you could visit the Most Popular section to see what people like.
                    </div>
                </div>
            </div>
            <div class="accordion-item" data-aos="fade-left">
                <div class="accordion-item-header">
                    Do I have to create an account to use this app?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        No, the app is accesible to use for anyone. You can search the recipes you want without logging in. But, we recommend creating an account to be able to add comments, add new recipes and save what recipes interest you.
                    </div>
                </div>
            </div>

        </div>
    </div>



    <section class="ask" id="ask">

<h2 class="h2-class"> Ask a question </h2>

<div class="row">

    <form data-aos="fade-right" method="POST" action="../includes/faqhandler.php">
        <input type="text" placeholder="your name" class="box" name="username">
        <textarea name="question" id="1" cols="30" rows="10" class="box address" placeholder="your question"></textarea>
        <input type="submit" value="Send" class="btn">
    </form>

</div>

</section>

    <!-- ask section ends -->

    <!--END OF FAQ-->

    <!--Footer-->

    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>


    <!-- aos js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <!-- custom js file link  -->
    <script src="../javascript/app.js"></script>


    <!-- initializing aos  -->

    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
</body>

</html>