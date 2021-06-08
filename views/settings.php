<?php include("../includes/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/settings.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
    <style>
        main {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
            padding-top: 25px;
            padding-bottom: 25px;
        }
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h2>Settings</h2>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../views/home.php">Home</a></li>
            <li><a href="../views/faq.php">Help</a></li>
            <li><a href="../views/popular.php">See most popular</a></li>
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
        <div class="container">
            <section class="order" id="order">
                <div>
                    <h1 class="heading"> Account Settings</h1>
                </div>
                <div class="row">
                    <form class="form-fr" method="POST" action="../includes/settings.inc.php" enctype="multipart/form-data">
                        <input type="text" placeholder="Your Name" name="name" class="box" value="<?php echo $row['username']; ?>">
                        <textarea name="description" cols="30" rows="" class="box address" placeholder="Short description"><?php echo $row['description']; ?></textarea>
                        <input type="email" name="email" class="box" placeholder="Email" value="<?php echo $row['email']; ?>">
                        <h3 style="color: white;">Upload your profile picture</h3>
                        <input type="file" id="myFile" name="file" style="border-bottom:0.5erm;">
                        <input type="submit" value="Update" class="btn" name="submit">
                        <?php
                        if (isset($_GET["error"])) { //if we get error messages in the browser
                            if ($_GET["error"] == "emptyinput") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
               <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
               Fill in the fields to Update!
            </div>";;
                            } else if ($_GET["error"] == "uploadfailed") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
            <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
            Updating failed!
         </div>";;
                            } else if ($_GET["error"] == "notGoodType") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
            <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
             Choose another type of picture (jpg,jpeg,gif,png)!
         </div>";;
                            } else if ($_GET["error"] == "fileTooBig") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
            <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 15px; vertical-align:middle;'></i>
            Picture size is too big!
         </div>";;
                            }
                        }
                        ?>


                    </form>
                </div>
            </section>
        </div>
    </main>


    <!--Footer-->
    <footer class="footer ">
        <div class="section-center ">
            <p class="text ">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <!--End of Footer-->

    <script src="../javascript/app.js"></script>

</body>

</html>