function menuDisplayStyle(y, x, f) {
    var i;
    for (i = 0; i < 3; i++) {
        x[i].style.display = 'none';
        f[i].style.background = 'white';
    }
    x[y].style.display = 'block';
    f[y].style.background = 'orange';
}


function displayPopular(y) {
    var x = document.getElementsByClassName("pop-category");
    var f = document.getElementsByClassName("filter-popular");
    if (x[y].style.display == "") {
        x[y].style.display = "none";
    }
    menuDisplayStyle(y, x, f);
}