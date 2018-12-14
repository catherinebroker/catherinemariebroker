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

<<<<<<< HEAD
/* Fade Out on Scroll Effect */
$(document).on("scroll", function () {
  var pageTop = $(document).scrollTop()
  var pageBottom = pageTop + $(window).height()
  var tags = $("section")

  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i]

    if ($(tag).position().top < pageBottom) {
      $(tag).addClass("visible")
    } else {
      $(tag).removeClass("visible")
    }
  }
})
=======


/* Fade Out on Scroll Effect */
>>>>>>> 2a22867df26ac298725ded24fedd8755af974179
