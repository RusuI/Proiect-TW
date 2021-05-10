//Menu when minimized

const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');




openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show() {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}

function close() {
    mainMenu.style.top = '-100%';
}

//FAQ

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }

    });
});
//display function
function display(x) {
    if (x.style.display == "") {
        x.style.display = "none";
    }
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

//add to favorites 
function liked(y) {
    var x = document.getElementsByClassName("fa-circle")[y];
    display(x);
    //you are not logged in
}

//display menu options
function displayOptions(y) {
    var x = document.getElementsByClassName("filter-options-content")[y];
    display(x);
}

//display navigation bar for search page
function menu() {
    var x = document.getElementsByClassName("filter-options-content")[0];
    display(x);
}

function search() {
    var x = document.getElementById("myAside");
    display(x);
}