
//responsive navbar
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
            x.className = "topnav";
            }
}

function navItem() {
    var x = document.getElementById("myTopnav");
    if (x.className === "responsive") {
        x.className += " topnav";
    } else {
            x.className = "topnav";
            }
}

//sets the jump links to offset the same amt of px as navbarfrom the top of the page
window.addEventListener("hashchange", function() { scrollBy(0, -50) })