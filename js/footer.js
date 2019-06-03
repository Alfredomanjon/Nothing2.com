$(function(){
    $(window).scroll(function() {  
        if($(document).scrollTop() > 800)
        {    
            $('#footer').addClass("show");
        }
        else
        {
            $('#footer').removeClass("show");
        }
     });
 })