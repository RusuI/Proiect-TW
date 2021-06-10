var selections = {};
var checkboxElems = document.querySelectorAll("input[type='checkbox']");
let ingredientsListArray = [];
let ingredientsBadListArray = [];
var resultsDiv = document.getElementById("result-div");
var tagSection = document.getElementById("user-src");
var wanted = document.getElementById("wanted");
var difficulty = "";
var prepTime = 0;
var cookTime = 0;
var serving = 0;
var sortOrder = "";

for (var i = 0; i < checkboxElems.length; i++) {
    checkboxElems[i].addEventListener("click", displayResult);
}

addListeners("diff", 3);
addListeners("ptime", 4);
addListeners("ctime", 4);
addListeners("serv", 5);
addListeners("sort", 4);

function addListeners(name, size) {
    for (var i = 1; i <= size; i++) {
        var filter = document.getElementById(name + i);
        filter.addEventListener("click", filterResult);
    }
}

function displayResult(e) {
    var ingredient = e.target.value;
    //console.log(wanted.style.display);
    if (wanted.style.display == 'block' || wanted.style.display == "") {
        if (!e.target.checked) {
            var index = ingredientsListArray.indexOf(ingredient);
            if (index > -1) {
                ingredientsListArray.splice(index, 1);
            }
            var divDelete = document.getElementById("div" + index + "i");
            if (divDelete == null) {
                index = ingredientsBadListArray.indexOf(ingredient);
                divDelete = document.getElementById("div" + index + "n");
                ingredientsBadListArray.splice(index, 1);
            }
            tagSection.removeChild(divDelete);
        } else {
            ingredientsListArray.push(ingredient);
        }
    } else {
        if (!e.target.checked) {
            var index = ingredientsBadListArray.indexOf(ingredient);
            if (index > -1) {
                ingredientsBadListArray.splice(index, 1);
            }
            var divDelete = document.getElementById("div" + index + "n");
            if (divDelete == null) {
                index = ingredientsListArray.indexOf(ingredient);
                divDelete = document.getElementById("div" + index + "i");
                ingredientsListArray.splice(index, 1);
            }
            tagSection.removeChild(divDelete);
        } else {
            ingredientsBadListArray.push(ingredient);
        }
    }
    getDisplay();
}

function getDisplay() {
    //make unwanted tag red
    const formData = new FormData();

    eraseCookie("ingredients");
    eraseCookie("badIngredients");
    eraseCookie("difficulty");
    eraseCookie("prepTime");
    eraseCookie("cookTime");
    eraseCookie("servings");
    createCookie("ingredients", ingredientsListArray, 7);
    createCookie("badIngredients", ingredientsBadListArray, 7);
    createCookie("difficulty", difficulty, 7);
    createCookie("prepTime", prepTime, 7);
    createCookie("cookTime", cookTime, 7);
    createCookie("servings", serving, 7);

    formData.append("ingredients", ingredientsListArray);
    formData.append("badIngredients", ingredientsBadListArray);
    formData.append("difficulty", difficulty);
    formData.append("prepTime", prepTime);
    formData.append("cookTime", cookTime);
    formData.append("servings", serving);
    formData.append("sortOrder", sortOrder);
    fetch('../includes/searchResults.inc.php', {
            method: 'POST',
            /*headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },*/
            body: formData
        })
        .then(response => response.text())
        .then(function(html) {

            // Convert the HTML string into a document object

            //var parser = new DOMParser();
            //var doc = parser.parseFromString(html, 'text/html');
            //console.log(html);
            if (html == '') {
                resultsDiv.innerHTML = '<p style="font-size:150%;"> No results found </p>';
            } else {
                resultsDiv.innerHTML = html;
            }
            tagSection.innerHTML = "";
            let tagTitle = document.createElement("h1");
            tagTitle.appendChild(document.createTextNode("You Searched For:"));
            tagSection.appendChild(tagTitle);
            ingredientsListArray.forEach((item, index) => {
                displayTag(item, index, true)
            });
            //console.log(readCookie("badIngredients"));
            ingredientsBadListArray.forEach((item, index) => {
                displayTag(item, index, false)
            });

        });
}


function displayTag(item, index, wanted) {
    let tagDiv = document.createElement("div");
    tagDiv.className = "tag";

    if (!wanted) {
        tagDiv.style.background = "red";
        tagDiv.id = "div" + index + "n";
    } else {
        tagDiv.id = "div" + index + "i";
    }
    let tagP = document.createElement("p");
    let deleteTag = document.createElement("i");
    deleteTag.className = "fas fa-times";
    if (wanted) {
        deleteTag.id = index + "i";
    } else {
        deleteTag.id = index + "n";
    }
    deleteTag.addEventListener("click", displayResultAfterTagDelete);
    tagP.appendChild(deleteTag);
    let ingredient = document.createTextNode(item);
    tagP.appendChild(ingredient);
    tagDiv.appendChild(tagP);
    tagSection.appendChild(tagDiv);
}

function displayResultAfterTagDelete(e) {
    var divDelete = document.getElementById("div" + e.target.id);
    let ingredient = divDelete.firstChild.textContent;
    let ingredientCheck = document.getElementById(ingredient);
    ingredientCheck.checked = false;
    tagSection.removeChild(divDelete);
    if (e.target.id.slice(e.target.id.length - 1) == "i") {
        var index = ingredientsListArray.indexOf(ingredient);
        if (index > -1) {
            ingredientsListArray.splice(index, 1);
        }
    } else {
        var index = ingredientsBadListArray.indexOf(ingredient);
        if (index > -1) {
            ingredientsBadListArray.splice(index, 1);
        }
    }
    getDisplay();
}

function displayIngredients(y) {
    var x = document.getElementsByClassName("src-ingredients")[y];
    if (x.style.display == "") {
        x.style.display = "none";
    }
    x.style.display = x.style.display == "none" ? "block" : "none";
}

function switchVisible(y) {
    if (y == 0) {
        document.getElementById('wanted').style.display = 'block';
        document.getElementById('unwanted').style.display = 'none';
        document.getElementById('wantedButton').style.background = 'orange';
        document.getElementById('unwantedButton').style.background = 'rgb(253, 197, 94)';
    } else {
        document.getElementById('wanted').style.display = 'none';
        document.getElementById('unwanted').style.display = 'block';
        document.getElementById('unwantedButton').style.background = 'orange';
        document.getElementById('wantedButton').style.background = 'rgb(253, 197, 94)';
    }
}

function filterResult(e) {
    var size;
    switch (e.target.id) {
        case "diff1":
            difficulty = "Easy";
            size = 3;
            break;
        case "diff2":
            difficulty = "Medium";
            size = 3;
            break;
        case "diff3":
            difficulty = "Difficult";
            size = 3;
            break;
        case "ptime1":
            prepTime = 120;
            size = 4;
            break;
        case "ptime2":
            prepTime = 60;
            size = 4;
            break;
        case "ptime3":
            prepTime = 30;
            size = 4;
            break;
        case "ptime4":
            prepTime = 10;
            size = 4;
            break;
        case "ctime1":
            cookTime = 120;
            size = 4;
            break;
        case "ctime2":
            cookTime = 60;
            size = 4;
            break;
        case "ctime3":
            cookTime = 30;
            size = 4;
            break;
        case "ctime4":
            cookTime = 10;
            size = 4;
            break;
        case "serv1":
            serving = 1;
            size = 5;
            break;
        case "serv2":
            serving = 3;
            size = 5;
            break;
        case "serv3":
            serving = 5;
            size = 5;
            break;
        case "serv4":
            serving = 8;
            size = 5;
            break;
        case "serv5":
            serving = 9;
            size = 5;
            break;
        default:
            sortOrder = e.target.id;
            size = 4;
            break;
    }
    showCheckMark(e.target, size);
    getDisplay();
}

function showCheckMark(elem, size) {
    var idName = elem.id.slice(0, -1);
    var checkMark = document.getElementById(idName + "checkMark");
    if (elem.contains(checkMark)) {
        elem.removeChild(checkMark);
        switch (idName) {
            case "diff":
                difficulty = "";
                break;
            case "ptime":
                prepTime = 0;
                break;
            case "ctime":
                cookTime = 0;
                break;
            case "serv":
                serving = 0;
                break;
            case "sort":
                sortOrder = "";
                break;
        }
    } else {
        if (checkMark != null) {
            for (var i = 1; i <= size; i++) {
                var prefDiv = document.getElementById(idName + i);
                if (prefDiv.contains(checkMark)) {
                    prefDiv.removeChild(checkMark);
                }
            }
        }
        elem.innerHTML += '<i class="fas fa-check" id="' + idName + 'checkMark"></i>';
    }
}


function displayFav(x, userId, recipeId) {
    if (x.style.display == "") {

        x.style.display = "none";
        //addToFavorites(x.id.substring(1));
    }
    if (x.style.display == "none") {
        x.style.display = "block";
        changeFavorites("../includes/addFavorites.inc.php", recipeId, userId);
    } else {
        x.style.display = "none";
        changeFavorites("../includes/removeFavorites.inc.php", recipeId, userId);
    }
}

function liked(y, userId, recipeId) {
    if (userId == -1) {
        alert("You are not logged in!");
    } else {
        var x = document.getElementsByClassName("fa-circle")[y];

        displayFav(x, userId, recipeId);
    }
}

function changeFavorites(endpoint, recipeId, userId) {

    //console.log(userId);
    //console.log(recipeId);
    const formData = new FormData();

    formData.append("userId", userId);
    formData.append("recipeId", recipeId);

    fetch(endpoint, {
            method: 'POST',
            /* headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },*/
            body: formData
        })
        .then(response => response.text())
        .then(function(html) {
            alert(html);
        });
}

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

function loadCookies() {
    value = readCookie("ingredients");
    if (value != null && value != "") {
        ingredientsListArray = value.split(",").filter(x => x);
        ingredientsListArray.forEach(element => {
            var checkB = document.getElementById(element);
            checkB.checked = true;
        });

    }

    value = readCookie("badIngredients");
    if (value != null && value != "") {
        ingredientsBadListArray = value.split(",").filter(x => x);
        ingredientsBadListArray.forEach(element => {
            var checkB = document.getElementById(element);
            checkB.checked = true;
        });
    }
    value = readCookie("difficulty");
    if (value != "" && value != null) {
        difficulty = value;
        var idName = "";
        switch (value) {
            case "Easy":
                idName = "diff1";
                break;
            case "Medium":
                idName = "diff2";
                break;
            case "Difficult":
                idName = "diff3";
                break;
        }

        var elem = document.getElementById(idName);
        idName = idName.slice(0, -1);
        elem.innerHTML += '<i class="fas fa-check" id="' + idName + 'checkMark"></i>';
    }
    value = readCookie("prepTime");
    if (value != "" && value != 0 && value != null) {
        prepTime = value;
        var idName = "";
        switch (value) {
            case "120":
                idName = "ptime1";
                break;
            case "60":
                idName = "ptime2";
                break;
            case "30":
                idName = "ptime3";
                break;
            case "10":
                idName = "ptime4";
                break;
        }
        var elem = document.getElementById(idName);
        idName = idName.slice(0, -1);
        elem.innerHTML += '<i class="fas fa-check" id="' + idName + 'checkMark"></i>';
    }
    value = readCookie("cookTime");
    if (value != 0 && value != "" && value != null) {
        cookTime = value;
        var idName = "";
        switch (value) {
            case "120":
                idName = "ctime1";
                break;
            case "60":
                idName = "ctime2";
                break;
            case "30":
                idName = "ctime3";
                break;
            case "10":
                idName = "ctime4";
                break;
        }
        var elem = document.getElementById(idName);
        idName = idName.slice(0, -1);
        elem.innerHTML += '<i class="fas fa-check" id="' + idName + 'checkMark"></i>';
    }
    value = readCookie("servings");
    if (value != "" && value != 0 && value != null) {
        serving = value;
        var idName = "";
        switch (value) {
            case "1":
                idName = "serv1";
                break;
            case "3":
                idName = "serv2";
                break;
            case "5":
                idName = "serv3";
                break;
            case "8":
                idName = "serv4";
                break;
            case "9":
                idName = "serv4";
                break;
        }
        var elem = document.getElementById(idName);
        idName = idName.slice(0, -1);
        elem.innerHTML += '<i class="fas fa-check" id="' + idName + 'checkMark"></i>';
    }
    getDisplay();
}