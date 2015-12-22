/**
 * Created by Vilim Stubičan on 17.7.2015..
 */

$(document).ready(function(){

    if($("#particlesBackground").length > 0) {
        particlesJS.load('particlesBackground', '/wp-content/themes/vdl/js/particles/particles.json', function () {
        });
    }


    var lastDocScrollTop = $(document).scrollTop();
    if(lastDocScrollTop > 0) $(".header-wrapper").removeClass("header-wrapper-full");
    var animating = false;
    $(document).on("scroll", function($event){
        if(animating) return true;
        var currentScroll = $(document).scrollTop();
        var goingDown = lastDocScrollTop < currentScroll;
        var body = $("html, body");
        if(goingDown && currentScroll < window.innerHeight) {
            animating = true;
            body.stop().animate({scrollTop:window.innerHeight}, '500', 'swing', function(){
                animating = false;
            });
            $(".header-wrapper").removeClass("header-wrapper-full");
        } else {
            if(!goingDown && currentScroll < window.innerHeight - 400) {
                animating = true;
                body.stop().animate({scrollTop:0}, '500', 'swing', function(){
                    animating = false;
                });
                $(".header-wrapper").addClass("header-wrapper-full");
            }
        }
        lastDocScrollTop = currentScroll;
    });


    /*Menu showing*/
    $(".hamburger-menu").on("click", function(){
        var state = $(this).attr("data-status");
        console.log(state);
        if(state == "off") {
            $(this).attr("data-status", "on");
            $(".sidebar-menu").attr("data-status", "on");
            $(".menu-overlay").fadeIn("fast");
        } else {
            $(this).attr("data-status", "off");
            $(".sidebar-menu").attr("data-status", "off");
            $(".menu-overlay").fadeOut("fast");
        }

    })
});
