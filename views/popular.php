 <!DOCTYPE html>
 <html lang="en">

 <!--<div>Icons made by <a href="https://www.flaticon.com/authors/ultimatearm" title="ultimatearm">ultimatearm</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Popular | WhaF</title>
     <link rel="icon" href="../images/pizza.png">

     <link rel="stylesheet" href="../css/popular.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/9f5ebffa29.js" crossorigin="anonymous"></script>
 </head>

 <body>
     <!--Navigation Bar-->
     <nav>
         <div class="logo">
             <h2>Popular</h2>
         </div>
         <div class="openMenu"><i class="fa fa-bars"></i></div>
         <ul class="mainMenu">
             <li><a href="../views/home.php">Home</a></li>
             <li><a href="../views/faq.php">Help</a></li>
             <li><a href="#">See most popular</a></li>
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
         <div id="menu-popular">
             <button class="filter-popular" id="recipes" style="background: orange;">Popular Recipes</button>

             <button class="filter-popular" id="ingredients">Popular Ingredients</button>

             <button class="filter-popular" id="badIngredients">Unpopular Ingredients</button>
         </div>
         <section>
             <div class="pop-category" style="display: block;">
                 <div class="filter-container">
                     <button class="filter-popular" style="display: inline; float:right;" onclick="displayOptions(0)">Download</button>
                     <div class="filter-options-content" style="margin-top:50px;">
                         <a href="popular.html"  id="html" download>HTML</a>
                         <a href="popular.csv" id="csv" download>CSV</a>
                         <a href="popular.json" id="json" download>JSON</a>
                     </div>
                 </div>
                 <div class="wrapper" id="popular">
                     <?php include("../includes/popular.inc.php"); ?>
                 </div>
             </div>
             </div>
         </section>
     </main>




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

     <script src="../javascript/app.js"></script>


     <script>
         function menuDisplayStyle(e) {


             //  if (e.target.style.display == "") {

             //      e.target.style.display = "none";
             //  }
             //var x = document.getElementsByClassName("pop-category");
             var f = document.getElementsByClassName("filter-popular");
             var i;
             //console.log(x[0]);
             for (i = 0; i < 3; i++) {

                 f[i].style.background = 'white';
             }

             e.target.style.background = 'orange';
             var popular = document.getElementById("popular");
             var html=document.getElementById("html");
             var csv=document.getElementById("csv");
             var json=document.getElementById("json");
             switch (e.target.id) {
                 case "ingredients":
                     popular.innerHTML = '<?php require_once "../includes/popularIngredients.php"; ?>';
                     html.href="popularIngredients.html";
                      csv.href="popularIngredients.csv";
                        json.href="popularIngredients.json";
                     break;
                 case "recipes":
                     popular.innerHTML = '<?php require_once "../includes/popular.inc.php"; ?>';
                     csv.href="popular.csv";
                       json.href="popular.json";
                     break;
                 case "badIngredients":
                     popular.innerHTML = '<?php require_once "../includes/unpopularIngredients.php"; ?>';
                     json.href="unpopularIngredients.json";
                     csv.href="unpopularIngredients.csv";
                    html.href="unpopularIngredients.html";
                     break;
             };
         }

         //  function displayPopular(y) {
         //      var x = document.getElementsByClassName("pop-category");
         //      var f = document.getElementsByClassName("filter-popular");
         //      console.log(x[y]);
         //      if (x[y].style.display == "") {
         //          x[y].style.display = "none";
         //      }
         //      menuDisplayStyle(y, x, f);D
         //  }


         var filter = document.getElementById("recipes");
         filter.addEventListener("click", menuDisplayStyle);
         var filter = document.getElementById("ingredients");
         filter.addEventListener("click", menuDisplayStyle);
         var filter = document.getElementById("badIngredients");
         filter.addEventListener("click", menuDisplayStyle);
     </script>

 </body>

 </html>