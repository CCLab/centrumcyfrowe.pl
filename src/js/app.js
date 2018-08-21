(function () {
    'use strict';


    window.getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    $(function() {
        $(document).ready(function () {
            $("#hide-cookies").click(function () {
                $('.cookies-visible').removeClass('cookies-visible');
                $('.cookies').slideUp(300, function () {
                    $('.cookies').addClass('hidden');
                });
                setCookie('centrumcyfrowe_cookie_accept', 1, 7);
            });

            $('.menu-trigger').click(function () {
                $(this).toggleClass('is-active');
                $('#main-menu').slideToggle();
            });

            /*// Add slideDown animation to Bootstrap dropdown when expanding.
            $('.dropdown').on('show.bs.dropdown', function () {
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
            });

            // Add slideUp animation to Bootstrap dropdown when collapsing.
            $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
            });
*/
            $(".toggle-code").click(function () {
                $(".side-code").toggleClass('show');
            });

            $('.loader-container').fadeOut();

            $('main span.contents-item').each(function (index) {
                var name = $(this).data('section');
                $('#content-nav-ul').append('<li><a href="#' + this.id + '">' + name + '</a></li>');
            });


            var swiper = new Swiper('.swiper-footer-logos', {
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                speed: 1000,
                freeMode: false,
                slidesPerView: '1',
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });

            /* SMOOTH SCROLL IN LANDING PAGE */
            $('a[href^="#"]').click(function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                if($target.length) {
                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                }
            });

            //prettySocial
            $('.prettySocial').prettySocial();


            if ($(window).width() > 767) {

                var initialOffset = 0;
                if($(window).width() > 1200){
                    initialOffset = ($(window).width() - 1170) / 2;
                }else if($(window).width() > 970){
                    initialOffset = ($(window).width() - 970) / 2;
                }else if($(window).width() > 776){
                    initialOffset = ($(window).width() - 750) / 2;
                }

                var swiper = new Swiper('.swiper-container-projects-home', {
                    speed: 400,
                    freeMode: true,
                    slidesPerView: 'auto',
                    spaceBetween: 32,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    slidesOffsetBefore: initialOffset,
                    breakpoints: {
                        767: {
                            slidesPerView: 1
                        }
                    }
                });

                if( $('.swiper-container-projects-home .swiper-wrapper').children().length <= 3 )
                    $('.swiper-button-next').addClass('hidden');

            } else {
                var projects_container = $('.swiper-container-projects-home .swiper-wrapper');
                for (var i = 0; i < projects_container.children().length; i++) {
                    if (projects_container.children().length > 3) {
                        projects_container.children().last().remove();
                    }
                }
            }

            $('.show-more-posts').click(function(e) {
                e.preventDefault();

                var thisBtn = $(this);
                var showLess = $(this).data('showless');
                var showMore = $(this).data('showmore');

                if($(".more-posts-container").is(':visible')){
                    $(".more-posts-container").slideUp();
                    thisBtn.text(showMore);
                }else {
                    $('.posts-loader').addClass('active');
                    jQuery.ajax({
                        type: "post",
                        dataType: "json",
                        url: "/wp-admin/admin-ajax.php",
                        async: false,
                        data: {
                            action: "get_related_posts",
                            querykey: $(this).data('querykey')
                        },
                        complete: function (response) {
                            $('.more-posts-container').html(response.responseText);
                            $('.more-posts-container').slideDown();
                            $('.posts-loader').removeClass('active');
                            thisBtn.text(showLess);
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    })
                }
            });


            if($('#zespol').length) {
                $(".filter-list a").click(function(e){
                    $(".filter-list a").removeClass('active');
                    $(this).addClass('active');
                    var currentSlug = $(this).data('slug');
                    if(currentSlug === 'all'){
                        $(".team-box a").show();
                    }else {
                        $(".team-box a").each(function () {
                            var teams = $(this).data('teams');
                            if (teams && teams.indexOf(currentSlug) !== -1) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                    }

                    e.preventDefault();
                    return false;
                });
            }
            
        });
        $(window).on('load', function () {
            setHeaderBg();
        });

        $("#main-menu-search").on("click", checkSearch);


        

        function setHeaderBg() {
            if ($(window).scrollTop() > 0) {
                $('nav.nav').addClass('scrolled');
                $('.content-nav').fadeIn(200);
            } else {
                $('nav.nav').removeClass('scrolled');
                $('.content-nav').fadeOut(200);
            }
        }


        $(window).scroll(function () {

            setHeaderBg();

        });

        var swiper_projects = new Swiper('.swiper-container-projects', {
            slidesPerView: 1

        });

        function checkSearch() {
            if ($("#main-menu-search").hasClass("search_off")) {

                $("#main-menu-search").addClass("search_on");
                $("#main-menu-search").removeClass("search_off");

                $("#main-nav-input").removeClass("hidden");
                $("#main-menu").css("display", "none");
                $(".search-icon i").css("color", "#ff5722");
            } else {
                $("#main-menu-search").addClass("search_off");
                $("#main-menu-search").removeClass("search_on");

                $("#main-nav-input").addClass("hidden");
                $("#main-menu").css("display", "block");
                $(".search-icon i").css("color", "#2a2a2a");

            }
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function eraseCookie(name) {
            document.cookie = name + '=; Max-Age=-99999999; path=/';
        }

    });
}(jQuery));

