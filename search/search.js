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

function displayOptions(y) {
    document.getElementsByClassName("filter-options-content")[y].classList.toggle("show")
}

window.onclick = function(event) {
    if (!event.target.matches('.filter-menus')) {
        var dropdowns = document.getElementsByClassName("filter-options-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}


function liked(y) {
    var x = document.getElementsByClassName("fa-circle")[y];
    if (x.style.display == "") {
        x.style.display = "none";
    }
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    //you are not logged in
}

function menu() {
    var x = document.getElementsByClassName("filter-options-content")[0];
    if (x.style.display == "") {
        x.style.display = "none";
    }
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function search() {
    var x = document.getElementById("myAside");
    if (x.style.display == "") {
        x.style.display = "none";
    }
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}