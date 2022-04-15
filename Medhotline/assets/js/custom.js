jQuery(document).ready(function($){

    $(".nav-menu").click(function(){

        $(".primary-menu-wrapper").slideToggle();

    });

    // Jquery click show/hide FAQ

    $('.faqs dd').hide();
    
    $('.faqs dt').click(function () {

        $(this).children('.plusminus').text($(this).children('.plusminus').text() == '+' ? 'x' : '+');
        $(this).children('.plusup').toggleClass("active");

        $(this).next('.faqs dd').slideToggle();

    });

    $('.primary-menu > li').click(function(){
        $(this).find('.sub-menu').slideToggle();
        $(this).toggleClass("active");
    });

});