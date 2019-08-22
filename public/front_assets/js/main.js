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
                
                console.log(valueSelected);
                for (let i = 0; i < valueSelected; i++) {
                    var html = '<div class="select-wrapper col-md-6"><select name="child_age_'+(i+1)+'" class="form-control custom-select selectbox"><option selected="selected" value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></div>';
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
    //autocomplete
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
                } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
                } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
    /*An array containing all the country names in the world:*/
    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    
    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    if($('#autoCompleteInput').length){
        autocomplete(document.getElementById("autoCompleteInput"), countries);
    }
});
