/*********************
GOOGLE MAPS
 * *******************/
function initMap() {
    var location = {lat:6.851752735825524, lng:7.3957015386340315};
    var map = new google.maps.Map(document.getElementbyId("map"),{
        zoom:4,
        center:location
    });
    
   
}




/*********************
 SERVICES SCROLL ANIMATION
 * *******************/

$(function() {

    // animate on scroll
    new WOW().init();
});

/*********************
 Magnific popup for Work section
 * *******************/
$(function(){
    $("#work").magnificPopup()

});

/*********************
 carousel for team section
 * *******************/

$(function(){

    $("#team-members").owlCarousel({
        items: 3,
        autoplay: true,
        smartspeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });
});

/*********************
 carousel for testimonials section
 * *******************/

$(function(){

    $("#customers-feedback").owlCarousel({
        items: 1,
        autoplay: true,
        smartspeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });
});

/*********************
 counter for stat section
 * *******************/

$(function(){

    $('.counter').counterUp({
        delay: 10,
        time: 2000
        
    });
});
/*********************
 carousel for client section
 * *******************/

$(function(){

    $("#clients-list").owlCarousel({
        items: 6,
        autoplay: true,
        smartspeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });
});

/*********************
 navigatiion
 * *******************/
$(function(){

    $(window).scroll(function(){
        if($(this).scrollTop() < 50 ){
            //hide nav
            $("nav").removeClass("brand-top-nav");
            $("#back-top").fadeOut();

        } else{
            //show nav
            $("nav").addClass("brand-top-nav");
            $("#back-top").fadeIn();
        }
       
    });
});

//smooth scroll

$(function(){

    $("a.smooth-scroll").click(function(event){
        event.preventDefault();
        //GET/RETURN ID #work # about etc
        var section = $(this).attr("href");

        $('html,body').animate({
            scrollTop: $(section).offset().top -64
        }, 1250 );
        
    });
});