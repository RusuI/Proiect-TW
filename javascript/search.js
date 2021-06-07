var selections = {};
var checkboxElems = document.querySelectorAll("input[type='checkbox']");
//var totalElem = document.getElementById("seats-total");
//var seatsElem = document.getElementById("selected-seats");

for (var i = 0; i < checkboxElems.length; i++) {
    checkboxElems[i].addEventListener("click", displayResult);
}

function displayResult(e) {
    var xhr;
    if (!e.target.checked) {
        //do smth
    } else {
        xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                xhr.responseType = "document";
                //e.id:tag
                document.getElementById("txtHint").innerHTML += this.responseXML;
            }
        };
        xhr.open("GET", "searchResult.php?ingr=" + e.value, true);
        xhr.send();
    }

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