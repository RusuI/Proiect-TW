<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe | WhaF</title>
    <link rel="icon" href="../images/pizza.png">
    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="../css/addRecipe.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body{
            background-image: url('../images/bg.jpeg');
        }
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <nav>
        <div class="logo">
            <h1>Profile</h1>
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
                <div class="closeMenu">
                    <i class="fa fa-times"></i>
                </div>
            </li>
            <li> <span class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
            </span>
            </li>
        </ul>
    </nav>

    <!--End of Navigation Bar-->


    <div class="container">
        <div class="box-container">
            <!-- add recipe section starts  -->

            <section class="add-recipe" id="add-recipe">
                <div>
                    <h1 class="heading" data-aos="fade-down"> Add a recipe</h1>
                </div>

                <div class="row">

                    <form action="/action_page.php" data-aos="fade-up">
                        <input type="text" placeholder="Recipe name" class="box">
                        <textarea name="1" id="1" cols="30" rows="10" class="box address" placeholder="Short description"></textarea>
                        <input type="number" placeholder="Preparation time" class="box">
                        <input type="number" placeholder="Cooking time" class="box">
                        <input type="number" placeholder="Serves" class="box">
                        <input type="text" placeholder="Difficulty" class="box">

                        <div class="ingredient">

                            <div class="label">
                                <div><label class="label-wrapper">
                                        ingredients:

                                        <!---->
                                    </label>
                                </div>
                                <!----><input data-testid="input" maxlength="55" placeholder="Add ingredient, e.g. flour" type="text" autocomplete="off" class="add-ingredient" tabindex="1">

                            </div>

                            <div><label class="label-wrapper"> 
                                    amount
                                </label>

                                <!---->
                            </div>
                            <input class="input" placeholder="0" type="number" max="10000" min="0" tabindex="1">

                            <select tabindex="1" class="select_list">
                                <!---->
                                <option class="ui-select__option" value="">0</option>
                                <option value="half" class="ui-select__option">½</option>
                                <option value="third" class="ui-select__option">⅓</option>
                                <option value="quarter" class="ui-select__option">¼</option>
                                <option value="eighth" class="ui-select__option">⅛</option>
                                <option value="twothirds" class="ui-select__option">⅔</option>
                                <option value="threequarters" class="ui-select__option">¾</option>
                            </select>


                            <div class="picker__unit">

                                <div class="label"><label class="label-wrapper"><span class="label">Unit</span>
                                        <!---->
                                    </label>
                                    <!---->
                                </div>
                                <select tabindex="1" class="select_list">
                                    <!---->
                                    <option class="ui-select__option" value="">Please select...
                                    </option>
                                    <option class="ui-select__option" value="cup">cup</option>
                                    <option class="ui-select__option" value="fl oz">fl oz</option>
                                    <option class="ui-select__option" value="ml">ml</option>
                                    <option class="ui-select__option" value="oz">oz</option>
                                    <option class="ui-select__option" value="tsp">tsp</option>
                                    <option class="ui-select__option" value="tbsp">tbsp</option>
                                    <option class="ui-select__option" value="bag">bag</option>
                                    <option class="ui-select__option" value="drop">drop</option>
                                    <option class="ui-select__option" value="gallon">gallon</option>
                                    <option class="ui-select__option" value="head">head</option>
                                    <option class="ui-select__option" value="kg">kg</option>
                                    <option class="ui-select__option" value="l">l</option>
                                    <option class="ui-select__option" value="leaf">leaf</option>
                                    <option class="ui-select__option" value="loaf">loaf</option>
                                    <option class="ui-select__option" value="package">package</option>
                                    <option class="ui-select__option" value="pinch">pinch</option>
                                    <option class="ui-select__option" value="pint">pint</option>
                                    <option class="ui-select__option" value="quart">quart</option>
                                    <option class="ui-select__option" value="scoop">scoop</option>
                                    <option class="ui-select__option" value="sheet">sheet</option>
                                    <option class="ui-select__option" value="slice">slice</option>

                                </select>
                                <input type="submit" value="Add to list" class="btn1">
                                <!---->
                            </div>




                        </div>



                        <div class="steps">

                            <div class="label">
                                <div>
                                    <label class="label-wrapper">
                                        steps:
                                    </label>
                                </div>
                                <!---->
                                <textarea name="ingredient" data-testid="input" maxlength="500" cols="30" rows="10" class="add-ingredient" placeholder="Add step, e.g. Step 1. ...."></textarea>

                            </div>
                            <!---->
                            <input type="submit" value="Add to list" class="btn1">
                        </div>



                        <input type="submit" value="Post now" class="btn">



                    </form>
                    <div class="photo" data-aos="fade-left">
                        <h2>Upload your photo</h2>

                        <form action="/action_page.php" class="upload">
                            <input type="file" id="myFile" name="filename">

                        </form>
                    </div>
                </div>

            </section>
        </div>

    </div>

    <!-- add recipe section ends -->



    <!--Footer section-->

    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy; <span>What The Food Project</span>
            </p>
        </div>
    </footer>

    <!-- aos js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../javascript/app.js"></script>

    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
</body>

</html>