<nav>
    <div class="logo">
        <h2>Welcome!</h2>
    </div>
    <div class="openMenu"><i class="fa fa-bars"></i></div>
    <ul class="mainMenu">
        <li><a href="#">Home</a></li>
        <li><a href="../views/faq.php">Help</a></li>
        <li><a href="../views/popular.php">See most popular</a></li>
        <li><a href="../views/search.php">Get started</a></li>
        <?php
        if (isset($_SESSION["id"])) {

            echo "<li><a href='../views/profile.php'>My Profile</a></li>";
        } else {
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