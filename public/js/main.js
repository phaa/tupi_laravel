(function ($) {
    "use strict";
    
    /*[ On page load ]
    ===========================================================*/

    //Prevent hidden header bug
    $(window).on("load", function(){
        if($(this).scrollTop() > 5 && $(this).width() > 992) {
            $(header).addClass('header-fixed');
        }
        else {
            $(header).removeClass('header-fixed');
        }
        $('.wrap-menu-header').css('border-top', '5px solid #43A906');
    });

    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });

    /*[ Play video 01]
    ===========================================================*/
    var srcOld = $('.video-mo-01').children('iframe').attr('src');

    $('[data-target="#modal-video-01"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

        setTimeout(function(){
            $('.video-mo-01').css('opacity','1');
        },300);
    });

    $('[data-dismiss="modal"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src = srcOld;
        $('.video-mo-01').css('opacity','0');
    });

    /*[ Fixed Header ]
    ===========================================================*/
    var header = $('header');
    //var logo = $(header).find('.logo img');

    $(window).on('scroll',function(){
        if($(this).scrollTop() > 5 && $(this).width() > 992) {
            $(header).addClass('header-fixed');
        }
        else {
            $(header).removeClass('header-fixed');
        }
    });

    /*[ Show/hide sidebar ]
    ===========================================================*/
    $('body').append('<div class="overlay-sidebar trans-0-4"></div>');
    var ovlSideBar = $('.overlay-sidebar');
    var hamburger = $("#myHamburger");
    var toogledHamburger = $('#sidebarHamburger');
    var sidebar = $('.sidebar');

    var callback = function() {
        hamburger.toggleClass("hidden");
        hamburger.toggleClass("is-active");
        toogledHamburger.toggleClass("is-active");
        sidebar.toggleClass('show-sidebar');
        ovlSideBar.toggleClass('show-overlay-sidebar');
        $("body, html").toggleClass("overflow-diff");
    }

    hamburger.on('click', function(){
        callback();
    })

    toogledHamburger.on('click', function(){
        callback();
    })

    //parte preta fira da sidebar
    ovlSideBar.on('click', function(){
        callback();
    })


    /*[ Isotope ]
    ===========================================================*/
    var topeContainer = $('.isotope-grid');
    var filter = $('.filter-tope-group');

    // filter items on button click
    filter.each(function () {
        filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            topeContainer.isotope({filter: filterValue});
        });

    });

    // init Isotope
    $(window).on('load', function () {
        var grid = topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                percentPosition: true,
                animationEngine : 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var labelGallerys = $('.label-gallery');

    $(labelGallerys).each(function(){
        $(this).on('click', function(){
            for(var i=0; i<labelGallerys.length; i++) {
                $(labelGallerys[i]).removeClass('is-actived');
            }

            $(this).addClass('is-actived');
        });
    });
})(jQuery);
