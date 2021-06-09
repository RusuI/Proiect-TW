
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/favorites.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        main {
            /* background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;*/
            background-color: wheat;
        }
    </style>
</head>

<body>

    <!--Navigation Bar-->

    <div class="section">
        <nav>
            <div class="logo">
                <h2>Favorites</h2>
            </div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="home.php">Home</a></li>
                <li><a href="faq.php">Help</a></li>
                <li><a href="popular.php">See most popular</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="addRecipe.php">Add Recipe</a></li>
                <li><a href="profile.php">My Profile</a></li>
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
            <section id="favorites">
                <div class="result-wrapper" id="results">
                    <?php
                    require '../includes/favorites.inc.php';
                    ?>
                </div>
            </section>
        </main>
    </div>
    <!--Footer section-->

    <footer class="footer ">
        <div class="section-center ">
            <p class="text ">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <script src="../javascript/app.js"></script>
    <script>
        let userId = "<?php echo $_SESSION["id"] ?>";
        let recipeId = "<?php echo $recipeId ?>";

        function removeFromFavorites() {
            const endpoint = "../includes/removeFavorites.inc.php";
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
                    recipe = document.getElementById("recipe" + recipeId);
                    results = document.getElementById("results");
                    results.removeChild(recipe);
                    console.log("good");
                });

        }
    </script>
</body>

</html>