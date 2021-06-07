
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/signup.css">
    <title>SignUp | WhaF</title>
    <link rel="icon" href="../images/pizza.png">
</head>

<body>
    <!-- Container -->
    <div class="container" id="container">
        <!-- Row -->
        <div class="row">
            <!-- Sign Up -->
            <div class="col align-center flex-col sign-up">
                <div class="form-wrapper align-center">
                    <form class="form sign-up" action="../includes/signup.inc.php" method="post" autocomplete="off">
                        <div class="input-group">
                            <i class="bx bxs-user"></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <i class="bx bx-mail-send"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password"name="password" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password" name="confpassword" placeholder="Confirm password">
                        </div>
                        <button type="submit" name="submit">Sign Up</button>
                        <p>
                            <span>Already have an account?</span>
                            <b id="sign-in"><a href="login.php" class="no-underline">Log In here</a></b>
                        </p>
                    </form>
                </div>
            </div>
            <!--  End Sign Up -->
            <?php
        
        if(isset($_GET["error"])){ //if we get error messages in the browser
           if($_GET["error"] == "emptyinput"){
               echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Fill in all the fields!</p>";
           }else if ($_GET["error"] == "invalidusername"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Choose a valid username!</p>";
           }else if ($_GET["error"] == "invalidemail"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Choose a valid email!</p>";
           }else if ($_GET["error"] == "pwddontmatch"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Passwords don't match!</p>";
           }else if ($_GET["error"] == "usertaken"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Username or email already exists!</p>";
           }else if ($_GET["error"] == "signupfailed"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Oops! Something went wrong. Try again!</p>";
           }else if ($_GET["error"] == "none"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute;'>You signed up! Now go and Log In to start cooking!</p>";
           }

        }

        ?>
        </div>

    
        <!-- End Row -->
        <!-- Content Section -->
        <div class="row content-row">
            <!-- Sign Up Content -->
            <div class="col align-items flex-col">
                <div class="text sign-up">
                    <h2>Join our comunity!</h2>
                    <p>
                        If you don't have an account yet, register to have multiple benefits and become part of the comunity!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->
    <!-- Script -->
    <script src="../javascript/signup.js"></script>
</body>

</html>