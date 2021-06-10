<!DOCTYPE html>
<html lang="en">

<!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | WhaF</title>
    <link rel="icon" href="../images/pizza.png">

    <link rel="stylesheet" href="../css/search.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>

    <style>
        body {
            padding: 60px;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('../images/bg.jpeg') center/cover no-repeat fixed;
            color:wheat;
        }
    </style>

</head>

<body>
    <div>
    <section>
        <h1>Users Administration</h1>
        <h2>Get All Users</h2>
        <form method = "post" action = "../includes/adminDownloadUsers.php">
        <input type="submit" value="Download Users">
        </form>
        <section id="allUsers"></section>
        <h2>Delete User</h2>
        <form method = "POST" action = "../includes/adminDeleteUser.php">
            <label>Username:</label><br>
            <input type="text" name ="username" placeholder="Write username..."><br>
            <input type="submit" value="Delete">
        </form>
    </section><br>
    <hr size="5" width="1000" color="orange">
    <section>
        <h1>Get All Recipes</h1>
        <form method = "post" action = "../includes/adminDownloadRecipes.php">
        <?php require_once "../includes/admin.recipes.php"; ?><br>
            <input type="submit" value="Download Recipes">
        </form>
    </section>
    <section>
        <h1>Delete Recipe</h1>
        <form method = "POST" action = "../includes/adminRecipeDelete.php">
            <label>Recipe Id:</label><br>
            <input name="recipeId" type="text" placeholder="Write id..."><br>
            <input type="submit" value="Delete">
        </form>
    </section>
    <br>
    <hr size="5" width="1000" color="orange">
    <section>
        <form method = "POST" action = "../includes/adminFaqUpdate.php">
        <h1>Answer FAQ</h1>
        <?php require_once "../includes/admin.faq.php"; ?><br>
        <textarea placeholder="Write answer..." rows="10" cols="100" name="answer"></textarea><br>
        <input type="submit" value="Answer">
        </form>
    </section>
    </div>
<?php
    if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                                echo "<div style='color: #cc0033;  display: inline-block; font-size: 100%; line-height: 15px; margin: 5px 0 0; font-family: 'Baloo Chettan 2';'><p>Action completed with succes!</p></div>";
                            }
                        }
                            ?>
</body>

</html>