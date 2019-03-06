$(function(){
  //Smooth Scroll
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });
  });













// /* Hamburger menu change to "x" Function */
// function hamburgerX(x) {
//     x.classList.toggle("change");
// }
//
// /* NavBar Responsive Function*/
// function myFunction() {
//     var x = document.getElementById("NavBar");
//     if (x.className === "NavBar") {
//         x.className += " responsive";
//     } else {
//         x.className = "NavBar";
//     }
// };
