
var  navBarClick = function () {
  $(".navbar-toggle").click();
};

function hideMenu(width) {
  console.log('width: ' + width);
  if (width < 768) {
    console.log('width is smaller than 768');
    $("body").on("click", ".nav a" ,navBarClick);
  } else {
    console.log('width is greater than 768');
    $("body").off("click",".nav a", navBarClick);
  }
}

function scrollDownToID(id) {
  var target = $(id).offset().top;
  $('html, body').animate({scrollTop:target}, 'slow');
}


hideMenu($(window).width());

$(window).resize(function() {
  hideMenu($(window).width());
});

$('.scroll-top').on('click', function(event) {
  event.preventDefault();
  $('html, body').animate({scrollTop:0}, 'slow');
});

$(".nav a").click(function() {
  var id = $(this).attr("data-id");
  scrollDownToID("#"+id);
});

$(document).ready( function () {
  $.stellar();
})