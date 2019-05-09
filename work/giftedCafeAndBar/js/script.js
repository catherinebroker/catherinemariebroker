$(function () {
    //Add active class to nav links
    $(".navlinks").click(function (){
      $(".navlinks").toggleClass("active");
    })
});

function backgroundChange1() {
  document.getElementById('top_bg').style.backgroundImage = "url('img/360bg.jpg')";
}

function backgroundChange2() {
  document.getElementById('top_bg').style.backgroundImage = "url('img/360bg.png')";
}

function backgroundChange3() {
  document.getElementById('top_bg').style.backgroundImage = "url('img/360bg.jpg')";
}
