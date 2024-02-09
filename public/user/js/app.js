/* Theme Name: Larix - Responsive One Page HTML5 Template
   Author: Themesdesign
   Version: 1.1.0
   File Description: Main JS file of the template
*/


! function ($) {
    "use strict";

    var Larix = function () { };

    Larix.prototype.initStickyMenu = function () {
        // Add scroll class
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } else {
                $(".sticky").removeClass("nav-sticky");
            }
        });
    },

        Larix.prototype.initSmoothLink = function () {
            // Smooth scroll
            $('.navbar-nav a').on('click', function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 0
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        },

        Larix.prototype.initTestimonials = function () {
            //Owl Carousel
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                stopOnHover: true,
                navigation: false,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: true,
                autoHeight: true,
            });
        },

        Larix.prototype.initScrollspy = function () {
            //Scrollspy
            $(".navbar-nav").scrollspy({
                offset: 50
            });
        },

        Larix.prototype.initPortfolioFilter = function () {
            // Portfolio filter
            $(window).on('load', function () {
                var $container = $('.projects-wrapper');
                var $filter = $('#filter');
                // Initialize isotope 
                $container.isotope({
                    filter: '*',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });

                // Filter items when filter link is clicked
                $filter.find('a').on("click", function () {
                    var selector = $(this).attr('data-filter');
                    $filter.find('a').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false,
                        }
                    });
                    return false;
                });
            });
        },

        Larix.prototype.initMagnificPopup = function () {
            // Magnific Popup
            $('.mfp-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                }
            });
        },

        Larix.prototype.init = function () {
            this.initStickyMenu();
            this.initSmoothLink();
            this.initTestimonials();
            this.initScrollspy();
            this.initPortfolioFilter();
            this.initMagnificPopup();
        },
        //init
        $.Larix = new Larix, $.Larix.Constructor = Larix
}(window.jQuery),

    //initializing
    function ($) {
        "use strict";
        $.Larix.init();
    }(window.jQuery);



function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var comments = document.forms["myForm"]["comments"].value;
    document.getElementById("error-msg").style.opacity = 0;
    document.getElementById('error-msg').innerHTML = "";
    if (name == "" || name == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'><i  data-feather='home' class='icon-sm align-middle me-2'></i> Please enter a name*</div>";
        fadeIn();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'><i  data-feather='alert-triangle' class='icon-sm align-middle me-2'></i> Please enter a email*</div>";
        fadeIn();
        return false;
    }
    if (comments == "" || comments == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'><i class='mdi mdi-alert'></i> Please enter a comments*</div>";
        fadeIn();
        return false;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("simple-msg").innerHTML = this.responseText;
            document.forms["myForm"]["name"].value = "";
            document.forms["myForm"]["email"].value = "";
            document.forms["myForm"]["comments"].value = "";
        }
    };
    xhttp.open("POST", "php/contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name + "&email=" + email + "&comments=" + comments);
    return false;
}
function fadeIn() {
    var fade = document.getElementById("error-msg");
    var opacity = 0;
    var intervalID = setInterval(function () {
        if (opacity < 1) {
            opacity = opacity + 0.5
            fade.style.opacity = opacity;
        } else {
            clearInterval(intervalID);
        }
    }, 200);
}