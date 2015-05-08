$(document).ready(function() {
    $(".jumper").on("click", function( e ) {

        // $("html, body").scrollTop($("#divider1").offset().top);
        // e.preventDefault();
        
        $("body, html").animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 600);

    });
});
