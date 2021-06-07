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

function displayPopular(y) {
    var x = document.getElementsByClassName("pop-category");
    var f = document.getElementsByClassName("filter-popular");
    if (x[y].style.display == "") {
        x[y].style.display = "none";
    }
    if (y == 0) {
        x[0].style.display = 'block';
        x[1].style.display = 'none';
        x[2].style.display = 'none';
        f[0].style.background = 'orange';
        f[1].style.background = 'white';
        f[2].style.background = 'white';
    } else if (y == 1) {
        x[1].style.display = 'block';
        x[0].style.display = 'none';
        x[2].style.display = 'none';
        f[1].style.background = 'orange';
        f[0].style.background = 'white';
        f[2].style.background = 'white';
    } else {
        x[2].style.display = 'block';
        x[1].style.display = 'none';
        x[0].style.display = 'none';
        f[2].style.background = 'orange';
        f[1].style.background = 'white';
        f[0].style.background = 'white';
    }
}


function displayOptions(y) {
    var x = document.getElementsByClassName("filter-options-content")[y];
    if (x.style.display == "") {
        x.style.display = "none";
    }
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}