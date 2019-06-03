$(function(){
    $(window).scroll(function() {  
        if($(document).scrollTop() > 850)
        {    
            $('#footer').addClass("show");
        }
        else
        {
            $('#footer').removeClass("show");
        }
     });
 })