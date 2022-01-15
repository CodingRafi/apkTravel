/*** 0.0 - jam ***/
function showTime() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";

    if (h == 0) {
        h = 12;
    }

    if (h > 12) {
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + " : " + m + " " + session;
    document.getElementById("jam").innertext = time;
    document.getElementById("jam").textContent = time;

    setTimeout(showTime, 1000);

}

showTime();

/*** 2.0 - date ***/
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '/' + mm + '/' + dd;

var parts = today.split('/');
var mydate = new Date(parts[0], parts[1] - 1, parts[2]);

document.getElementById("date").innertext = mydate.toDateString();
document.getElementById("date").textContent = mydate.toDateString();

/*** 3.0 - checkbox ***/
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })

}

/*** 4.0 - area map ***/
var divs = ["Div0", "Div1", "Div2", "Div3", "Div4", "Div5", "Div6", "Div7", "Div8", "Div9", "Div10", "Div11"];
var visibleDivId = null;

function divVisibility(divId) {
    if (visibleDivId === divId) {
        visibleDivId = null;
    } else {
        visibleDivId = divId;
    }
    hideNonVisibleDivs();
    
}

function hideNonVisibleDivs() {
    var i, divId, div;
    for (i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if (visibleDivId === divId) {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }

}
