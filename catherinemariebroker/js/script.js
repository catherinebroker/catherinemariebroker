/* Hamburger menu change to "x" Function */
function hamburgerX(x) {
    x.classList.toggle("change");
}

/* NavBar Responsive Function*/
function myFunction() {
    var x = document.getElementById("NavBar");
    if (x.className === "NavBar") {
        x.className += " responsive";
    } else {
        x.className = "NavBar";
    }
};


$(window).scroll(function(){
    $(".section_top").css("opacity", 1 - $(window).scrollTop() / 250);
  });

/* Fade Out on Scroll Effect */