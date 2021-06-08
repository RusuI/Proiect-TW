<?php include("../includes/config.php"); ?>
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
            <?php
            if (isset($_SESSION["id"])) {

                echo "<li><a href='../views/addRecipe.php'>Add Recipe</a></li>";
                echo "<li><a href='../views/profile.php'>My Profile</a></li>";
                
            }
            else{
                echo "<li><a href='../views/login.php'>Join Us</a></li>";
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

    <!--FAQ-->
    <div class="container">
        <h1>FAQ</h1>

        <div class="accordion" data-aos="fade-left">
        <?php do{?> 
            <div class="accordion-item" data-aos="fade-right">
            <?php if($row_faq['answer']!=NULL){ ?>
                <div class="accordion-item-header">
        
                <?php  echo $row_faq['question']?>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    <?php  echo $row_faq['answer'] ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } while ($row_faq = mysqli_fetch_assoc($faq_result)) ?>
        </div>


      
    </div>



    <section class="ask" id="ask">

<h2 class="h2-class"> Ask a question </h2>

<div class="row">

    <form data-aos="fade-right"method="POST" action="../includes/faq.inc.php" >
        <input type="text" placeholder="your name" class="box" name="username" id="name">
        <textarea name="question" id="question" cols="30" rows="5" class="box address" placeholder="your question"></textarea>
        <input type="submit" value="Send" class="btn" name="submit">


        
    </form>



    
</div>
<?php
    if(isset($_GET["error"])){ //if we get error messages in the browser
           if($_GET["error"] == "emptyinput"){
               echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 5px 0px; padding: 8px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
               <i class='fa fa-times-circle' style='margin:8px 15px; font-size: 30px; vertical-align:middle;'></i>
               Fill in all the fields to Send!
            </div>";;
           }
        }

        ?>

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