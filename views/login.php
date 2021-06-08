<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
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

        .error-msg {
            color: #cc0033;
            display: inline-block;
            font-size: 12px;
            line-height: 15px;
            margin: 5px 0 0;
            font-family: 'Baloo Chettan 2';
        }

        .general-error {
            color: #D8000C;
            background-color: #FFD2D2;
            margin: 5px 0px;
            padding: 8px;
            border-radius: .5em;
            box-shadow: 1px 1px 3px #888;
        }

        .general-error i {
            margin: 8px 15px;
            font-size: 15px;
            vertical-align: middle;
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
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyuser") {
                                echo "<div class='error-msg'><p>Username cannot be empty!</p></div>";
                            }
                        }
                        ?>
                        <div class="input-group">
                            <i class="bx bxs-lock-alt"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptypassword") {
                                echo "<div class='error-msg'><p>Password cannot be empty!<p></div>";
                            }
                        }
                        ?>
                        <button type="submit" name="submit" class="link-button">
                            <span style="text-decoration: none; color:white;">Log In</span>
                        </button>

                        <p>
                            <span> Don't have an account? </span>
                            <b id="sign-up"><a href="signup.php" class="no-underline" style="text-decoration: none; color:rgb(255, 69, 0);">Sign Up here</b>
                        </p>

                    </form>
                    <?php

                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<div class='general-error'>
                                <i class='fa fa-times-circle'></i>
                                Fill in the fields to Log In!
                             </div>";
                        } else if ($_GET["error"] == "loginfailed") {
                            echo "<div class='general-error'>
                                <i class='fa fa-times-circle'></i>
                                Incorrect username or password!
                             </div>";
                        }
                    }

                    ?>
                </div>

            </div>
            <!-- End Sign In -->
        </div>
        <!-- End Row -->
        <!-- Content Section -->
        <div class="row content-row">
            <!-- Sign In Content -->
            <div class="col align-items flex-col">
                <div class="text sign-in">
                    <h2>Welcome Back!</h2>
                    <p>
                        Log In and have fun cooking!
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