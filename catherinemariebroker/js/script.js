$(document).ready(function() {

/************ ALL PAGES ***************/

  /* Add smooth scrolling to all links*/
  $("a").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
        }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
      });
    };
  });


  /* Sparkling Effect */
    var body = $('#starshine'),
    template = $('.template.shine'),
    stars =  100,
    sparkle = 80;

    var size = 'small';
    var createStar = function() {
      template.clone().removeAttr('id').css({
       top: (Math.random() * 100) + '%',
       left: (Math.random() * 100) + '%',
       webkitAnimationDelay: (Math.random() * sparkle) + 's',
       mozAnimationDelay: (Math.random() * sparkle) + 's'
     }).addClass(size).appendTo(body);
   };

   for(var i = 0; i < stars; i++) {
     if(i % 2 === 0) {
       size = 'small';
     } else if(i % 3 === 0) {
       size = 'medium';
     } else {
       size = 'large';
     }
     createStar();
   }


/************ INDEX PAGE ***************/
  /* Content Fade on Scroll */
  // $(window).scroll(function(){
  //     $("#section_top").css("opacity", 1 - $(window).scrollTop() / 350);
  //   });
  //
  // $(window).scroll(function(){
  //     $("#section_services").css("opacity", 1.5 - $(window).scrollTop() / 1000);
  //   });
  //
  // $(window).scroll(function(){
  //     $("#section_work").css("opacity", 1.5 - $(window).scrollTop() / 2500);
  //   });


  // function scrollFade(windowSize) {
  //   if (windowSize.matches) { // If media query matches
  //     $(window).scroll(function(){
  //         $("#section_top").css("opacity", 1 - $(window).scrollTop() / 350);
  //       });
  //
  //     $(window).scroll(function(){
  //         $("#section_services").css("opacity", 1.5 - $(window).scrollTop() / 1000);
  //       });
  //
  //     $(window).scroll(function(){
  //         $("#section_work").css("opacity", 1.5 - $(window).scrollTop() / 2500);
  //       });
  //   }
  // }
  //
  // var windowSize = window.matchMedia("(min-width: 740px)")
  // scrollFade(windowSize) // Call listener function at run time
  // windowSize.addListener(scrollFade) // Attach listener function on state changes



/************ ABOUT PAGE ***************/
//Animate Skills Bars after scrolling */
$(window).scroll(function(){
    $("#html5").addClass("html5");
    $("#css3").addClass("css3");
    $("#javascript").addClass("javascript");
    $("#jquery").addClass("jquery");
    $("#php").addClass("php");
    $("#mysql").addClass("mysql");
    $("#wordpress").addClass("wordpress");
    $("#bootstrap").addClass("bootstrap");
    $("#adobecloud").addClass("adobecloud");
  });



}); /*End JQuery*/

  /* Responsive Mobile Nav Script*/
  function navFunction() {
    var x = document.getElementById("navBar_mobile_links");
    if (x.className === "navBar_mobile_links") {
      x.className += "responsive";
    } else {
      x.className = "navBar_mobile_links";
    }
    var y = document.getElementById("navBar_mobile");
    if(y.className === "navBar_mobile") {
      y.className += "navMargin";
    } else {
      y.className = "navBar_mobile";
    }
  }

  /* Fade on Scroll Effect, only when the window is >740px */
  // function scrollFade(windowSize) {
  //   if (windowSize.matches) { // If media query matches
  //     document.body.style.backgroundColor = "yellow";
  //   } else {
  //    document.body.style.backgroundColor = "pink";
  //   }
  // }
  //
  // var windowSize = window.matchMedia("(max-width: 740px)")
  // scrollFade(windowSize) // Call listener function at run time
  // windowSize.addListener(scrollFade) // Attach listener function on state changes
