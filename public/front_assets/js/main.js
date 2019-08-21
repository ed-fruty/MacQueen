jQuery(function($){
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {
        //slide special offer
        $('.special-offer-list').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            speed: 2000,
            dots: false,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });
        // ----------------------- WOW-JS --------------------------- //
        new WOW().init();
        // ----------------------- SELECTBOX --------------------------- //
        // change style for select box
        $(".selectbox").selectbox();

        // ----------------------- CLOSE DATEPICKER --------------------------- //
        $('.sbHolder').on('click', function(event){
            $('.input-daterange .tb-input, .date .tb-input').datepicker('hide');
        });

        $('body').on('click', function(event){
            if ( $('.sbHolder').has(event.target).length === 0 && !$('.sbHolder').is(event.target)) {
                $(".selectbox").selectbox('close');
            }
        });


        // THEME SETTING
        $('.theme-setting > a.btn-theme-setting').on('click', function(){
            if($('.theme-setting').css('left') < '0'){
                $('.theme-setting').css('left', '0');
            } else {
                $('.theme-setting').css('left', '-220px');
            }
        });
        var list_color = $('.theme-setting > .content-theme-setting > ul.color-skins > li');

        var setTheme = function (color) {
            $('#color-skins').attr('href', 'assets/css/' + color + '/' + 'color.css');
            $('.logo .header-logo img,.logo-footer img,.group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-' + color + '.png');
            $('.logo-black img').attr('src', 'assets/images/logo/logo-black-' + color + '.png'); 
            setTimeout(function(){
                $('.theme-loading').hide();
            }, 1000);
        };

        list_color.on('click', function() {
            list_color.removeClass("active");
            $(this).addClass("active");
            $('.theme-loading').show();
            setTheme($(this).attr('data-color'));
            Cookies.set('color-skin', $(this).attr('data-color'));
        });
        /*Book tour hotel datepicker*/
        if($(".find-hotel-widget .tb-input").length) {
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
            // DATE PICKER
            $('.input-daterange input').each(function() {
                $(this).datepicker({
                    format: 'mm/dd/yy',
                    maxViewMode: 0,
                    autoclose: true,
                    startDate: today,
                    todayHighlight: true
                });
            });
            $('#fromDate').on('changeDate', function(selected) {
                // see if the second picker has a date selected
                var toDate = $('#toDate').datepicker('getDate');
                var d = new Date(selected.date);
                d.setDate(d.getDate() + 1);
                console.log(d);
                if (toDate) {
                    // if it is before the first date, set to the value of the first date
                    if (selected.date.valueOf() > toDate.valueOf()) {
                        $('#fromDate').datepicker('setDate', selected.date);
                    }
                }
                // sets the start date on the second picker
                $('#toDate').datepicker('setStartDate', d);
            });
            $('#fromDate').on('clearDate', function() {
                $('#toDate').datepicker('clearDates');
            });
        }
    };

    /*=======================================
    =           END MAIN FUNCTION           =
    =======================================*/


    /*=======================================
    =            HEADER & FOOTER            =
    =======================================*/

    SLZ.header_footerFunction = function() {
        // Show dropdown language on topbar
        $('.dropdown-text').on('click', function(){
            if ($(this).parent().find(".dropdown-topbar").hasClass('hide') === false) {
                $(this).parent().find(".dropdown-topbar").addClass('hide');
                $('.dropdown-topbar').addClass('hide');
            }
            else {
                $('.dropdown-topbar').addClass('hide');
                $(this).parent().find(".dropdown-topbar").removeClass('hide');
            }
        });
        $('body').on('click', function(event){
            if ( $('.dropdown-text').has(event.target).length === 0 && !$('.dropdown-text').is(event.target)) {
                $('.dropdown-topbar').addClass('hide');
            }
        });

        // ----------------------- BACK TOP --------------------------- //
        $('#back-top .link').on('click', function () {
            $('body,html').animate({
                scrollTop: 0
            }, 900);
            return false;
        });

        var temp = $(window).height();
        $(window).on('scroll load', function (event) {
            if ($(window).scrollTop() > temp){
                $('#back-top .link').addClass('show-btn');
            }
            else {
                $('#back-top .link').removeClass('show-btn');
            }
        });

        //js for menu PC
        if ($(window).width() > 768){
             // Add class fixed for menu when scroll
            var window_height = $(window).height();

            $(window).on('scroll load', function (event) {
                if ($(window).scrollTop() > window_height) {
                    $(".header-main").addClass('header-fixed');
                }
                else {
                    $(".header-main").removeClass('header-fixed');
                }
                if ($('.bg-white').hasClass('header-03') || $('.bg-transparent').hasClass('header-03')) {
                    if ($(window).scrollTop() <= 50) {
                        $(".header-main").removeClass('header-fixed');
                    }
                }
            });

            // Show menu when scroll up, hide menu when scroll down
            var lastScroll = 50;
            $(window).on('scroll load', function (event) {
                var st = $(this).scrollTop();
                if (st > lastScroll) {
                    $('.header-main').addClass('hide-menu');
                    if ($('.nav-search').hasClass('hide') === false) {
                        $('.nav-search').toggleClass('hide');
                    }
                }
                else if (st < lastScroll) {
                    $('.header-main').removeClass('hide-menu');
                }

                if ($(window).scrollTop() <= 200 ){
                    $('.header-main').removeClass('.header-fixed').removeClass('hide-menu');
                }
                else if ($(window).scrollTop() < window_height && $(window).scrollTop() > 0) {
                    $('.header-main').addClass('hide-menu');
                }
                lastScroll = st;

            });

            // show menu for homepage 03 when click btn-menu
            $('.btn-menu').on('click', function(){
                $('.header-main').toggleClass('show-menu');
            });

            // Show - hide box search on menu
            $('.button-search').on('click', function () {
                $('.nav-search').toggleClass('hide');
            });

            //hide box seach when click outside
            $('body').on('click', function (event) {
                if ($('.button-search').has(event.target).length === 0 && !$('.button-search').is(event.target) && $('.nav-search').has(event.target).length === 0 && !$('.nav-search').is(event.target)) {
                    if ($('.nav-search').hasClass('hide') === false) {
                        $('.nav-search').toggleClass('hide');
                    }
                }
            });
        }

        // js show menu when screen < 1024px
        $('.hamburger-menu').on('click', function(){
            $('.hamburger-menu-wrapper').toggleClass('open');
            $('body').toggleClass('show-nav');
        });

        if ($(window).width() <= 768) {
            // show hide dropdown menu
            $('.menu-mobile>.nav-links>.dropdown>.icons-dropdown').on('click', function(){
                if ($(this).parent().find('.dropdown-menu').hasClass('dropdown-focus') === true) {
                    $(this).parent().find('.dropdown-menu').removeClass('dropdown-focus');
                    $(this).removeClass('active');
                }
                else {
                    $('.menu-mobile .dropdown .dropdown-menu').removeClass('dropdown-focus');
                    $('.icons-dropdown').removeClass('active');
                    $(this).parent().find('.dropdown-menu:first').addClass('dropdown-focus');
                    $(this).addClass('active');
                }
            });
            $('.dropdown-submenu .icons-dropdown').on('click', function(){
                $(this).parent().find('.dropdown-menu-2:first').toggleClass('dropdown-focus');
                $(this).toggleClass('active');
            });
        }

        // Slide logo on footer
        $('.slide-logo-wrapper').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplay: true,
            autoplaySpeed: 1,
            speed: 8000,
            arrows: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 3,
                         speed: 5000
                    }
                },
                {
                    breakpoint: 381,
                    settings: {
                        slidesToShow: 2

                    }
                }
            ]
        });

        // show gallery
        $(".fancybox").fancybox({
            prevEffect  : 'none',
            nextEffect  : 'none',
            helpers : {
                title   : {
                    type: 'outside'
                },
                thumbs  : {
                    width   : 60,
                    height  : 60
                }
            }
        });
    };

    /*=======================================
    =         END HEADER & FOOTER           =
    =======================================*/


    /*===========================================
    =            CALC SPACING BANNER            =
    ===========================================*/
    
    SLZ.calcSpacingBanner = function() {
        var header_height = $('header').height();
        var tabBtn_height = $('.tab-search .nav-tabs .tab-btn-wrapper').height();
        $('.page-banner').css('top',header_height*(-1));
        $('.page-banner').css('margin-bottom',header_height*(-1) - tabBtn_height);
    };
    
    /*=====  End of CALC SPACING BANNER  ======*/
    


    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function(){
        SLZ.header_footerFunction();
        SLZ.mainFunction();
        SLZ.calcSpacingBanner();
    });

    $(window).on('resize', function() {
        SLZ.calcSpacingBanner();
    });

    $(window).on('load', function() {

        setTimeout(function() {
            $('.body-wrapper, .theme-setting').addClass('loaded');
            window.loading_screen.finish();
        }, 0);

        if ($(window).width() >= 768 && $(window).width() <= 1024) {
            $(window).on('resize', function(){
                location.reload();
            });
        }
    });

    /*======================================
    =          END INIT FUNCTIONS          =
    ======================================*/
    //more options
    $('select#selectRoom').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        //console.log(valueSelected);
        if(valueSelected === "more"){
            $('.moreOptions').toggle();
        }
    });
    //add children age
    function chooseAge(){
        $('select.childNum').on('change', function (e) {
                //var optionSelected = $("option:selected", this);
                //var valueSelected = this.value;
                //var $option = $(this).find('option:selected');
                //Added with the EDIT
                var valueSelected = $(this).next().find('.sbSelector').html();
                console.log(valueSelected);
                $(this).parents('.addedRoom').find('.childrenAge').html('');
                var html = '<div class="select-wrapper"><select class="form-control custom-select selectbox"><option selected="selected">1</option><option>2</option><option>3</option><option>4</option></select></div>';
                console.log(valueSelected);
                for (let i = 0; i < valueSelected; i++) {
                    $(this).parents('.addedRoom').find('.childrenAge').append(html);
                    $(this).parents('.addedRoom').find('.childrenAge .selectbox').selectbox();
                }
            });
    }
    //add another room
    $('#addRoom').on('click',function(){
        var rooms = $('.rooms .addedRoom').length;
        if(rooms < 5){
            var getHtml = $('.rooms .addedRoom.hidden').html();
            var roomNum = Number($('.rooms .addedRoom:last-child #roomNum').html());
            $('.rooms').append('<div class="addedRoom">'+getHtml+'</div>');
            $('.rooms .addedRoom:last-child #roomNum').html(roomNum + 1);
            $('.rooms .addedRoom:last-child').find("select").each(function(){
                $(this).selectbox();
            });
            chooseAge();
            return false;
        }
        else{
            return false;
        }
    });
    //remove room
    $(document).on('click','#removeRoom',function(){
        $(this).parents('.addedRoom').remove();
        return false;
    });
    chooseAge();
});
