/**
 * Theme: Highdmin - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Main Js
 */


(function ($) {

    'use strict';

    function initSlimscrollMenu() {

        $('.slimscroll-menu').slimscroll({
            height: 'auto',
            position: 'right',
            size: "8px",
            color: '#9ea5ab',
            wheelStep: 5
        });
    }

    function initSlimscroll() {
        $('.slimscroll').slimscroll({
            height: 'auto',
            position: 'right',
            size: "8px",
            color: '#9ea5ab'
        });
    }

    function initMetisMenu() {
        //metis menu
        $("#side-menu").metisMenu();
    }

    function initLeftMenuCollapse() {
        // Left menu collapse
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            $("body").toggleClass("enlarged");
            initSlimscrollMenu();
        });
    }

    function initEnlarge() {
        if ($(window).width() < 1025) {
            $('body').addClass('enlarged');
        } else {
            if ($('body').data('keep-enlarged') != true)
                $('body').removeClass('enlarged');
        }
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            if (this.href == window.location.href) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().addClass("in");
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("in"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("active");
            }
        });
    }

    function init() {
        initSlimscrollMenu();
        initSlimscroll();
        initMetisMenu();
        initLeftMenuCollapse();
        initEnlarge();
        initActiveMenu();
    }

    init();

    /*
    /* Code below added by MarocGeek Team
    */
//Launch full screen
function launchIntoFullscreen(element) {
    var isFull = false ;
    if(element.requestFullscreen) {
     element.requestFullscreen();
     isFull = true ;
    } else if(element.mozRequestFullScreen) {
     element.mozRequestFullScreen();
     isFull = true ;
    } else if(element.webkitRequestFullscreen) {
     element.webkitRequestFullscreen();
     isFull = true ;
    } else if(element.msRequestFullscreen) {
     element.msRequestFullscreen();
     isFull = true ;
    }
    if(isFull){
     exitFullscreen();
    }
    }
    //Exit full screen
    function exitFullscreen() {
    if(document.exitFullscreen) {
     document.exitFullscreen();
    } else if(document.mozCancelFullScreen) {
     document.mozCancelFullScreen();
    } else if(document.webkitExitFullscreen) {
     document.webkitExitFullscreen();
    }
    }
    //$("#fullscreen").click(launchIntoFullscreen(document.documentElement));
    $( "#fullscreen" ).click(function() {
        launchIntoFullscreen(document.documentElement);
      });

})(jQuery)
