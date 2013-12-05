var readyState = function(callback)
{
    var body = document.body;
    
    if(body && body.readyState == 'loaded')
    {
        callback();
    }
    else
    {
        if (window.addEventListener)
        {
            window.addEventListener('load', callback, false);
        }
        else
        {
            window.attachEvent('onload', callback);
        }
    }   
}

readyState(function()
{
    /**
     * Scroll Page
     */
    function scrollPage(page)
    {
        $('#navigation a[data-nav="scroll"]').removeClass('active');

        $('#navigation a[href="#/' + page + '"]').addClass('active');

        scroll = false;

        //$('html, body').animate({ scrollTop: $('#' + page).offset().top }, 800, function(){ scroll = true; });
        $('html, body').animate({ scrollTop: $('#' + page).offset().top + $('#news-teaser').height()}, 800, function(){ scroll = true; });
    }

    /**
     * Hash helper
     */
    function parseHash(newHash, oldHash)
    {
        crossroads.parse(newHash);
    }

    /**
     * Position of the intro text
     */
    function introPos()
    {
        //$('#intro').css({'margin-top':( $('.box:first').height() - $('#header').height() - $('#intro').height() - parseFloat($('#intro').css('padding-top')) *2.2 )});
        $('#intro').css({'margin-top':( $('.box:first').height() - $('#header .navbar').height() - $('#intro').height() - parseFloat($('#intro').css('padding-top')) *2.2 )});
    }

    /**
     * Set Hash silently
     */
    function setHashSilently(hash){
        hasher.changed.active = false;
        hasher.setHash(hash);
        hasher.changed.active = true;
    }

    /**
     * Panel offset
     */
    $('.panel').css({'margin-top':$('#header').height()});

    /**
     * Crossroad
     */
    crossroads.addRoute('{page}', function(page)
    {
            scrollPage(page);
    });
    //crossroads.routed.add(console.log, console); // log all routes
    
    /**
     * Hasher
     */
    hasher.initialized.add(parseHash);
    hasher.changed.add(parseHash);
    hasher.init();
    
    introPos();

    $('#intro').fadeIn();

    /**
     * Window scroll
     */
    $(window).scroll(function()
    {
        var self = this;
        
        if(scroll)
        {
            $('.box').each(function()
            {
                    if(($(self).scrollTop() + $('#header').height()) >= $(this).position().top && ($(self).scrollTop() + $('#header').height()) < ($(this).position().top + $(this).height()))
                    {
                            $("#navigation a[href='#/"+$(this).attr('id') + "']").addClass('active');
                            setHashSilently($(this).attr('id'));
                    }
                    else
                    {
                            $("#navigation a[href='#/"+$(this).attr('id') + "']").removeClass('active');
                            crossroads.resetState();
                    }
            });
        }

        if ($(this).scrollTop() > 50)
        {
            // $('#header .navbar').css('background-color', 'rgba(0, 0, 0, 0.8)');
            $('#back-top').fadeIn();
        }
        else
        {
            // $('#header .navbar').css('background', 'none');
            $('#back-top').fadeOut();
        }
    });

    /**
     * Window resize
     */
    $(window).resize(function()
    {
        introPos();
    });

    /**
     * Scroll to top links
     */    
    $('#back-top').click(function(event)
    {
        $('#navigation a[data-nav="scroll"]').removeClass('active');

        var firstItem = $('#navigation a[data-nav="scroll"]:first');
        
        firstItem.addClass('active');

        hasher.setHash(firstItem.attr('href').replace('#/', ''));

        //$('html, body').animate({ scrollTop: 0 }, 800);
        $('html, body').animate({ scrollTop: $('#intro').offset().height() }, 800);
        
        return false;
    });

    $('#logo').click(function(event)
    {
        $('#navigation a[data-nav="scroll"]').removeClass('active');

        var firstItem = $('#navigation a[data-nav="scroll"]:first');

        firstItem.addClass('active');

        hasher.setHash(firstItem.attr('href').replace('#/', ''));

        $('html, body').animate({ scrollTop: 0 }, 800);
        
        return false;
    });

    /**
     * Vegas background image slider
     */
    /*$.vegas('slideshow',
    {
        delay: 10000,
        backgrounds: [
            { src: 'img/bg1.jpg', fade: 2000 },
            { src: 'img/bg2.jpg', fade: 2000 },
            { src: 'img/bg3.jpg', fade: 2000 },
            { src: 'img/bg4.jpg', fade: 2000 },
            { src: 'img/bg5.jpg', fade: 2000 },
            { src: 'img/bg6.jpg', fade: 2000 },
            { src: 'img/bg7.jpg', fade: 2000 },
            { src: 'img/bg8.jpg', fade: 2000 },
            { src: 'img/bg9.jpg', fade: 2000 }
        ]
    })('overlay');*/

    /**
     * Lightbox
     */
     /*

    $('#lightbox').on('click', function(event)
    {
        $('#lightbox').hide();
    });

    $('.lightbox_trigger').click(function(event)
    {
        event.preventDefault();
        
        $('#bigimg').attr({'src':$(this).attr("href")});
        $('#lightbox').show();
    });
    */

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

    /**
     * Swipebox
     */
    $(".swipebox").swipebox();
    $(".swipebox-video").swipebox();

    /**
     * News block
     */
     $('#news-teaser button[class="close"]').on('click', function(e) {
        $('#news-teaser').hide();
     })
});