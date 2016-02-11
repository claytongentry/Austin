$(document).ready(function() {

  console.log("Scroll.js loaded");

  $(".jumper").on("click", function( e ) {
    console.log("Jumper function called");
    e.preventDefault();

    $("body, html").animate({
        scrollTop: $( $(this).attr("href") ).offset().top}, 900);
        console.log("We've supposedly scrolled by now.");
  });
});
