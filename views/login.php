
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <title>Login | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <style>
        body {
            font-family: 'Baloo Chettan 2', cursive;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/loginbg.jpeg') center/cover no-repeat fixed;
            height: 100vh;
            overflow: hidden;
            font-weight: 400;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <!-- Container -->
    <div class="container" id="container">
        <!-- Row -->
        <div class="row">
            <!-- Sign In -->
            <div class="col align-center flex-col sign-in">
                <div class="form-wrapper align-center">
                    <form class="form sign-in" action="../includes/login.inc.php" method="post" autocomplete="off">
                        <div class="input-group">
                            <i class="bx bxs-user"></i>
                            <input type="text" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <button type="submit" name="submit" class="link-button">
                            <span style="text-decoration: none; color:white;">Sign In</span>
                        </button>
                        <p>
                            <b>Forgot password?</b>
                        </p>
                        <p>
                            <span> Don't have an account? </span>
                            <b id="sign-up"><a href="signup.php" class="no-underline">Sign Up here</b>
                        </p>
                    </form>
                </div>

            </div>
            <!-- End Sign In -->
            <?php
        
        if(isset($_GET["error"])){ //if we get error messages in the browser
           if($_GET["error"] == "emptyinput"){
               echo "<p style='padding: 10px 0px; color: white; position: absolute;'>Fill in all the fields!</p>";
           }else if ($_GET["error"] == "loginfailed"){
            echo "<p style='padding: 10px 0px; color: white; position: absolute; border: 2px solid white;'>Incorrect username or password!</p>";
           }
        }

        ?>
        </div>
        <!-- End Row -->
        <!-- Content Section -->
        <div class="row content-row">
            <!-- Sign In Content -->
            <div class="col align-items flex-col">
                <div class="text sign-in">
                    <h2>Welcome Back!</h2>
                    <p>
                        Sign in into your account and have fun cooking!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->
    <!-- Script -->
    <script src="../javascript/login.js"></script>
</body>

</html>