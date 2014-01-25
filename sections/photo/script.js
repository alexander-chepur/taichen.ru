/**
 * Flexslider
 */
$('.slide-content').height($(window).height()*0.55); 
$('.slide-content > div').css({'background-image': 
    function() 
    {
        return 'url("'+ $(this).attr('rel') +'")'; 
    }
});
$('.slide-content > div').css({'background-position': 
    function() 
    {
        return $(this).attr('pos'); 
    }
});
$('.slide-content > div').css({'background-size': 'contain'});
$('.slide-content > div').css({'background-repeat': 'no-repeat'});
$('.flexslider').flexslider({slideshow: false});