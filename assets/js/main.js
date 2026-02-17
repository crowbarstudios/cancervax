$(function () {

  $('button[aria-controls="mobile-menu"]').on("click", function(){
    $("#mobile-menu").toggleClass("show");
  });

});