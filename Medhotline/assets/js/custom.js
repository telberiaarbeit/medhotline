jQuery(document).ready(function($){
    // Jquery click show/hide FAQ
    $('.faqs dd').hide();
    $('.faqs dt').click(function () {
        $(this).children('.plusminus').toggleClass("multiply");
        $(this).children('.plusup').toggleClass("active");
        $(this).next('.faqs dd').slideToggle();
    });
    $('.menu-dropdown').click(function(){
        $(this).children('.nav-menu').toggleClass("multiply");
        $(".menu-main").slideToggle();
    });
    // Add/Remove class scroll to bottom
    $(window).scroll(function(){
        if (jQuery(this).scrollTop() > 116) {
           jQuery('#header').addClass('box-shadow');
        } else {
           jQuery('#header').removeClass('box-shadow');
        }
    });
    // JQuery function to allow only alphabets in textbox
    $( ".name input" ).keypress(function(e) {
        var key = e.keyCode;
        if (key >= 48 && key <= 57) {
            e.preventDefault();
        }
    });
    // Show/Hide click button btn-get-started
    $('#headingOne .btn-get-started, #headingTwo .btn-get-started, #headingThree .btn-get-started, #headingFour .btn-get-started, #headingFive .btn-get-started').click(function(){
        $(this).hide();
    });
    $('#collapseOne .close').click(function(){
        $('#headingOne .btn-get-started').show();
    });
    $('#collapseTwo .close').click(function(){
        $('#headingTwo .btn-get-started').show(); 
    });
    $('#collapseThree .close').click(function(){
        $('#headingThree .btn-get-started').show(); 
    });
    $('#collapseFour .close').click(function(){
        $('#headingFour .btn-get-started').show(); 
    });
    $('#collapseFive .close').click(function(){
        $('#headingFive .btn-get-started').show(); 
    });
});