<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
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
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyuser") {
                                echo "<div style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2';'><p>Username cannot be empty!</p></div>";
                            } else if ($_GET["error"] == "invalidusername") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Invalid username!<p></div>";
                            } else if ($_GET["error"] == "usertaken") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Username already exists!<p></div>";
                            }
                        }
                        ?>
                        <div class="input-group">
                            <i class="bx bx-mail-send"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyemail") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Email cannot be empty!<p></div>";
                            } else if ($_GET["error"] == "invalidemail") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Invalid email adress!<p></div>";
                            } else if ($_GET["error"] == "emailtaken") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Email already exists!<p></div>";
                            }
                        }
                        ?>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptypassword") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Password cannot be empty!<p></div>";
                            }
                        }
                        ?>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password" name="confpassword" placeholder="Confirm password">
                        </div>
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "pwddontmatch") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>Passwords don't match!<p></div>";
                            } else if ($_GET["error"] == "emptypasswordconf") {
                                echo "<div class='error-message' style='color: #cc0033;  display: inline-block; font-size: 12px; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2''><p>You also need to fill in this field!<p></div>";
                            }
                        }
                        ?>
                        <button type="submit" name="submit">Sign Up</button>
                        <p>
                            <span>Already have an account?</span>
                            <b id="sign-in"><a href="login.php" class='no-underline' style="color: rgb(255, 69, 0); text-decoration: none" ;>Log In here</a></b>
                        </p>
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "signupfailed") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 3px 0px; padding: 5px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
                                <i class='fa fa-times-circle' style='margin:8px 10px; font-size: 5px;  vertical-align:middle;'></i>
                                Oops! Something went wrong. Try again!
                             </div>";
                            } else if ($_GET["error"] == "emptyinput") {
                                echo "<div style='color: #D8000C; background-color: #FFD2D2; margin: 3px 0px; padding: 5px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
                                <i class='fa fa-times-circle' style='margin:8px 10px; font-size: 5px; vertical-align:middle;'></i>
                                Fill in the fields before submitting!
                             </div>";
                            } else if ($_GET["error"] == "none"){
                                echo "<div style='color: #4F8A10; background-color: #DFF2BF; margin: 3px 0px; padding: 5px; border-radius:.5em; box-shadow:1px 1px 3px #888;'>
                                <i class='fa fa-times-circle' style='margin:8px 10px; font-size: 5px; vertical-align: middle;'></i>
                                Signed up successfully!<b id='sign-in'><a href='login.php' class='no-underline' style='color: rgb(255, 69, 0); text-decoration: none' ;> Log In </a></b>and have fun!
                             </div>";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
            <!--  End Sign Up -->
        </div>

        <!-- End Row -->
        <!-- Content Section -->
        <div class="row content-row">
            <!-- Sign Up Content -->
            <div class="col align-items flex-col">
                <div class="text sign-up">
                    <h2>Join our comunity!</h2>
                    <p>
                        If you don't have an account yet, register to start cooking!
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