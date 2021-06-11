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
        body {
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

                    <form enctype="multipart/form-data" data-aos="fade-up" id="info" action="#">
                        <form id="ingredientForm" onsubmit="disableAction">
                            <form id="stepsForm" onsubmit="disableAction">
                                <input type="text" placeholder="Recipe name" class="box" name="name" form="info" id="name">
                                <textarea name="description" id="description" cols="30" rows="10" class="box address" placeholder="Short description" form="info"></textarea>
                                <input type="number" name="prep_time" id="prep_time" placeholder="Preparation time" class="box" form="info">
                                <input type="number" name="cook_time" id="cook_time" placeholder="Cooking time" class="box" form="info">
                                <input type="number" name="serv" id="serv" placeholder="Serves" class="box" form="info">

                                <select class="select_list" form="info" id="diff">
                                    <option class="ui-select_option">--Choose difficulty--</option>
                                    <option>Easy</option>
                                    <option>Medium</option>
                                    <option>Difficult</option>
                                </select>



                                <div class="ingredient">

                                    <div class="label">


                                        <div><label class="label-wrapper">Ingredients category:</label>

                                            <select tabindex="1" class="select_list" id="category" name="category" onchange="categoryChange()">
                                                <!--de modificat valorile-->
                                                <option class="ui-select_option">--Choose category--</option>
                                                <option class="ui-select__option" value="vegetable">Vegetables</option>
                                                <option value="fruit" class="ui-select__option">Fruits</option>
                                                <option value="meat" class="ui-select__option">Meats</option>
                                                <option value="Fish" class="ui-select__option">Fish</option>
                                                <option value="Seafood" class="ui-select__option">Seafood</option>
                                                <option value="Dairy" class="ui-select__option">Dairy</option>
                                                <option value="dairy alt" class="ui-select__option">Dairy Alternatives</option>
                                                <option value="Legumes" class="ui-select__option">Legumes</option>
                                                <option value="Baking and Grains" class="ui-select__option">Baking and Grains</option>
                                                <option value="seasoning" class="ui-select__option">Seasonings</option>
                                                <option value="sauce" class="ui-select__option">Sauces</option>
                                                <option value="nut" class="ui-select__option">Nuts</option>
                                                <option value="oil" class="ui-select__option">Oils</option>
                                                <option value="sweet" class="ui-select__option">Sweeteners</option>
                                                <option value="alcohol" class="ui-select__option">Alcohol</option>
                                                <option value="desert" class="ui-select__option">Deserts and Snacks</option>
                                                <option value="beverage" class="ui-select__option">Beverages</option>

                                            </select>
                                            <br>

                                            <div><label class="label-wrapper">
                                                    amount
                                                </label>

                                                <!---->

                                            </div>
                                            <input class="input" id="amount" placeholder="0" type="number" max="10000" min="0" tabindex="1">



                                            <div class="picker__unit">

                                                <div class="label"><label class="label-wrapper"><span class="label">Unit</span>
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                                <select tabindex="1" class="select_list" id="unit">
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



                                                <input type="submit" value="Add to list" class="btn1" form="ingredientForm" onclick="sendData()">
                                                <!---->
                                            </div>



                                            <div id="list" class="label-wrapper">List:</div>

                                        </div>



                                        <div class="steps">
                                            <div class="label">
                                                <div>
                                                    <label class="label-wrapper">
                                                        steps :
                                                    </label>
                                                </div>
                                                <textarea id="steps" name="ingredient" data-testid="input" maxlength="200" cols="10" rows="3" class="add-ingredient" placeholder="Add step, e.g. Step 1. ...."></textarea>

                                            </div>

                                            <input type="submit" value="Add to list" class="btn1" onclick="sendDataSteps()" form="stepsForm">

                                            <div id="listStep" class="label-wrapper">List:</div>
                                        </div>



                                        <div class="photo" data-aos="fade-left">
                                            <h2>Upload your photo</h2>
                                            <input type="file" name="file1" id="file1">
                                            <input type="file" name="file2" id="file2">
                                        </div>



                            </form>
                        </form>
                    </form>



                    <button value="Post now" type="button" class="btn" name="submit" onclick="Event1()"> Post now </button>


                    <div id="Error"> </div>

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
    <script src="../javascript/addRecipeAjax.js"></script>

    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>


    <script>
        let ingredientsListArray = [];
        let stepsArray = [];

        function categoryChange() {

            var x = document.getElementById("category").value;
            var select = document.getElementById("category");
            fetch('../includes/addRecipeIngredients.inc.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                    },
                    body: 'category=' + x
                })
                .then(response => response.text())
                .then(function(html) {

                    // Convert the HTML string into a document object

                    var parser = new DOMParser();
                    var doc = parser.parseFromString(html, 'text/html');
                    console.log(doc);
                    select.insertAdjacentHTML('afterEnd', html); //dupa asta iau optiunile cu let
                    let ingredientList =
                        document.getElementById('ingredients');
                });

        }

        function sendData() {
            let ingredient = document.getElementById('ingredients').value;
            let ingredientAmount = document.getElementById('amount').value;
            let ingredientUnit = document.getElementById('unit').value;
            let list = document.getElementById("list");

            list.innerHTML += `<div class="label-wrapper"> ${ingredient} ${ingredientAmount} ${ingredientUnit}  </div>`;
            ingredientsListArray.push(ingredient);
            ingredientsListArray.push(ingredientAmount);
            ingredientsListArray.push(ingredientUnit);

        }

        function sendDataSteps() {

            let listStep = document.getElementById("listStep");

            let step = document.getElementById("steps").value;
            listStep.innerHTML += `<div class="label-wrapper"> ${step} </div>`
            stepsArray.push(step);
        }



        function Event1() {

            let name = document.getElementById("name").value;
            let description = document.getElementById("description").value;
            let prep_time = document.getElementById("prep_time").value;
            let cook_time = document.getElementById("cook_time").value;
            let serv = document.getElementById("serv").value;
            let diff = document.getElementById("diff").value;
            let file1=document.getElementById("file1").files[0];
            let file2=document.getElementById("file2").files[0];
            console.log(file1); console.log(file2);

            formData=new FormData();
            formData.append("list",ingredientsListArray);
            formData.append("listStep",stepsArray);
            formData.append("name",name);
            formData.append("description",description);
            formData.append("prep_time",prep_time);
            formData.append("cook_time",cook_time);
            formData.append("serv",serv);
            formData.append("diff",diff);
            formData.append("file1",file1);
            formData.append("file2",file2);

        



            // postData("../includes/addRecipe.inc.php", {
            //         "listStep": stepsArray,
            //         "list": ingredientsListArray,
            //         "name": name,
            //         "description": description,
            //         "prep_time": prep_time,
            //         "cook_time": cook_time,
            //         "serv": serv,
            //         "diff": diff,
            //         "file1":file1,
            //         "file2":file2
            //     }).then(response => response.text())
            //     .then((response) => {
            //         console.log(response)
            //         if (response == "Empty input") {
            //             let Error = document.getElementById("Error");
            //             Error.innerHTML = `<div class="label-wrapper"> empty input </div>`
            //         } else if (response == "Upload failed") {
            //             let Error = document.getElementById("Error");
            //             Error.innerHTML = `<div class="label-wrapper"> Upload failed </div>`
            //         } else if (response == "Add with succes") {
            //             let Error = document.getElementById("Error");
            //             Error.innerHTML = `<div class="label-wrapper"> Add with succes </div>`
            //         }
            //         //document.write(response)
            //     })


            document.getElementById("info").reset();
            document.getElementById("list").innerHTML = "";
            document.getElementById("listStep").innerHTML = "";
            fetch("../includes/addRecipe.inc.php", {
                method:"post",
                body:formData

            }).then(response => response.text())
                .then((response) => {
                    console.log(response)
                    if (response == 1) {
                        alert("Empty Input");
                        let Error = document.getElementById("Error");
                        Error.innerHTML = `<div class="label-wrapper"> Empty Input! </div>`
                    } else if (response == 2) {
                        alert("Upload Failes");
                        let Error = document.getElementById("Error");
                        Error.innerHTML = `<div class="label-wrapper"> Upload failed </div>`
                    } else if (response == 4) {
                        alert("Add with succes");
                        let Error = document.getElementById("Error");
                        Error.innerHTML = `<div class="label-wrapper"> Add with succes </div>`
                    }
                    //document.write(response)
        })
            


        }


        function disableAction(e) {
            e.preventDefault();

        }
    </script>

</body>

</html>