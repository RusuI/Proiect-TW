<!DOCTYPE html>
<html lang="en">

<!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/history.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
    <style>
        main {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
        }
    </style>

</head>

<body>
    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h2>History</h2>
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
    <!--Main-->
    <main>
        <div id="menu-history">
            <h2 id="history-title">My History</h2>
            <form class="filter-history">
                <select name="time" id="time">
                    <option value="alltime">All Time</option>
                    <option value="today">Today</option>
                    <option value="month">Last Month</option>
                </select>
            </form>

            <form class="filter-history">
                <select name="action" id="action">
                    <option value="like">Liked</option>
                    <option value="delete">Deleted</option>
                    <option value="add">Added</option>
                    <option value="complete">Completed</option>
                    <option value="search">Searches</option>
                </select>
            </form>
            <div style="clear: both;"></div>
        </div>

        <div id="history-list">
            <div class="history-box">
                <div class="history-time">
                    <time>17:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> to <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>deleted</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> from <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:12</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> to <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:00</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>completed</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>16:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> a new recipe:<a href="#"><i>Lemon-Ricotta Pancakes</i></a>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>16:17</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-14">Today</time>
                </div>
                <div class="history-text">
                    <p>You <b>searched</b> for a <i>Medium</i> recipe made with <i>tomato</i>, <i>potato</i>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> to <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>deleted</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> from <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:12</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a> to <b>Favorites.</b></p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:00</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>completed</b> <a href="#"><i>Lemon-Ricotta Pancakes</i></a>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>17:37</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> a new recipe:<a href="#"><i>Lemon-Ricotta Pancakes</i></a>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>16:15</time>
                </div>
                <div class="history-time">
                    <time datetime="2008-02-13">Yesterday</time>
                </div>
                <div class="history-text">
                    <p>You <b>searched</b> for a <i>Medium</i> recipe made with <i>tomato</i>, <i>potato</i>.</p>
                </div>
            </div>
            <div class="history-box">
                <div class="history-time">
                    <time>16:07</time>
                </div>
                <div class="history-time">
                    <time datetime="2007-04-08">8 april</time>
                </div>
                <div class="history-text">
                    <p>You <b>added</b> a new recipe:<a href="#"><i>Lemon-Ricotta Pancakes</i></a>.</p>
                </div>
            </div>
        </div>

    </main>

    <!--End of Main-->

    <!--Footer!-->
    <footer class="footer ">
        <div class="section-center ">
            <p class="text ">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>
    <!--End of Footer-->


    <!--End of Cards Section-->

    <script src="history.js "></script>
    <script src="../javascript/app.js"></script>

</body>

</html>