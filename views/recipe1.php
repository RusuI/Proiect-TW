<?php include("../includes/recipe.inc.php");
      include("../includes/score.inc.php");
      error_reporting(0);
session_start(); ?>

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
</head>

<body>

    <!--Navigation Bar-->


    <nav>
        <div class="logo">
            <h2>Welcome!</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="home.php">Home</a></li>
            <li><a href="faq.php">Help</a></li>
            <li><a href="popular.php">See most popular</a></li>
            <li><a href="search.php">Search</a></li>
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
                    <div data-aos="fade-right"> <?php $row = mysqli_fetch_assoc($recipePhoto);
                                                echo '<img class="ingredients row image" src="../includes/uploads/' . $row['photo'] . '" alt="">' ?> </div>
                    <div class="line">

                        <span class="user">
                            <a class="user" href="#"><i class="fas fa-user" aria-hidden="true"></i><?php echo $recipeAuthor;  ?></a>
                        </span>
                        <!--review -->
                        <div class="recipereview">

                            <span class="score">
                                <h3 class="numberPhotos" id="score"><a class="numberPhotos" href="#gallery"> <?php echo $score; ?> pictures</a></h3>
                            </span>

                        </div>
                        <!-- End review -->
                        <!--heart button-->
                        <?php
                        if (isset($_SESSION['id'])) {
                            echo " <div id='add-fav' class='heart'><a href='javascript:void(0)' onclick='addToFavorites()'><i class='far fa-heart'></i></a></div>";
                        }
                        ?>
                        <!--End of heart button-->
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
                        <?php $row = mysqli_fetch_assoc($recipePhoto);
                        echo '<img class="menu-img" src="../includes/uploads/' . $row['photo'] . '" alt="">' ?>
                    </div>

                    <div class="steps">
                        <div class="info">
                            <?php while ($row = mysqli_fetch_array($recipeSteps)) { ?>
                                <h3> <span> Step <?php echo $row['step_nr']+1; ?></span> </h3>
                                <p> <?php echo $row['step_details']; ?></p>

                            <?php } ?>
                        </div>

                    </div>

                </div>

            </section>




            <!--Ingredients and prepare -->

            <!-- gallery section starts  -->

            <section class="gallery" id="gallery">

                <div class="gallery"> <?php require_once "../includes/recipeGallery2.php" ?> </div>

            </section>

        </div>

        </section>

        <!-- gallery section ends -->



        <!-- add-photo section starts  -->
        <?php
        if (!isset($_SESSION['id'])) {
            echo "<h2 class='h2-class'>Join our comunity and have the option to post your own version of the dish!</h2>";
        } else {
            echo
            "<section  class='add-photo' id='add-photo'>
 
                 <h1 class='heading'> Post your dish</h1>
 
                 <div class='row'>
 
                     <form  id='myForm'>
                         <input type='text' placeholder='your name' class='box' id='name' name='name'>
                         <div class='photo' style='color:black'>
                             <h2>Upload your photo</h2>
                             <input type='file' id='myFile' name='filename'>
                         </div>
                         <button type='submit' value='Post now' class='btn'> Upload your Photo</button>
                         <div id='Error'></div>
                     </form>
 
                 </div>
 
             </section>";
        }

        ?>

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
        const myForm = document.getElementById("myForm");
        const inpFile = document.getElementById("myFile");
        const name = document.getElementById("name");
        let userID = "<?php echo $_SESSION["id"] ?>";
        let recipeId= "<?php echo $recipeId ?>";

        myForm.addEventListener("submit", e => {
            e.preventDefault();

            const endpoint = "../includes/addRecipePhoto.inc.php";
            const formData = new FormData();


            console.log(inpFile.files);
            formData.append("inpFile", inpFile.files[0]);
            formData.append("name", name.value);
            formData.append("recipeId",recipeId);

            fetch(endpoint, {
                    method: "post",
                    body: formData
                }).then(response =>
                    response.text())
                .then(function(html) {
                    console.log(html);
                    if (html == 1) { //aici vom face display la poze dupa inserare 

                    } else {
                        if (html == 2) {
                            let Error = document.getElementById("Error");
                            Error.innerHTML = `<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
            <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
            Upload failed!
         </div>`;
                        } else {
                            if (html == 3) {
                                let Error = document.getElementById("Error");
                                Error.innerHTML = `<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
            <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
            Empty input!
         </div>`;
                            }
                        }
                    }
                   displayImage(recipeId);
                }).catch(console.error);
        });
    </script>


    <script>
        function displayImage(recipeId) {
            const formData = new FormData();
            formData.append("recipeId", recipeId);
            const endpoint = "../includes/recipeGallery.inc.php";
            fetch(endpoint, {
                    method: "post",
                    body:formData
                }).then(response =>
                    response.text())
                .then(function(html) {
                    let gallery = document.getElementById("gallery");
                    gallery.innerHTML = html;
                    console.log(html);
                }).catch(console.error);

        }
    </script>
        <script>
        let userId = "<?php echo $_SESSION["id"] ?>";
        console.log(userId);
        console.log(recipeId);

        function addToFavorites() {
            const endpoint = "../includes/addFavorites.inc.php";
            const formData = new FormData();

            formData.append("userId", userId);
            formData.append("recipeId", recipeId);

            fetch(endpoint, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(function(html) {
                    console.log(html);
                     alert(html);
                    //displayHeart();
                });
        }
        function createCookie(name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else var expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            createCookie(name, "", -1);
        }

        function loadHeart(){
            if(readCookie("heart-state") != ""){
                fav = document.getElementById("add-fav");
                fav.style.backgroundColor = readCookie("heart-state");
            }
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