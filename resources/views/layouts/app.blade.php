<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('libs/jquery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('libs/js-cookie/js.cookie.js') }}"></script>
        <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('#color-skins').attr('href', '{{ asset("css/' + Cookies.get('color-skin') + '/' + 'color.css")}}');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('#color-skins').attr('href', '{{ asset("css/color-1/color.css")}}');
            }
        </script>
      
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
      <link type="text/css" rel="stylesheet" href="{{ asset('fonts.googleapis.com/css?family=Roboto:300,400,500,700,900')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('fonts.googleapis.com/css?family=Montserrat:400,700')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('font/font-icon/font-awesome/css/font-awesome.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('font/font-icon/font-flaticon/flaticon.css')}}">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/animate/animate.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/slick-slider/slick.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/slick-slider/slick-theme.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/selectbox/css/jquery.selectbox.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/please-wait/please-wait.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/fancybox/css/jquery.fancybox.css?v=2.1.5')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/fancybox/css/jquery.fancybox-buttons.css?v=1.0.5')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('libs/fancybox/css/jquery.fancybox-thumbs.css?v=1.0.7')}}">
        <!-- STYLE CSS-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/components.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css')}}">
        <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
        <link type="text/css" rel="stylesheet" href="#" id="color-skins">
          <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

            <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('.logo .header-logo img ,.logo-footer img, .group-logo .img-logo').attr('src', '{{ asset("images/logo/logo-white-' + Cookies.get('color-skin') + '.png")}}');
                $('.logo-black img').attr('src', '{{ asset("images/logo/logo-black-' + Cookies.get('color-skin') + '.png")}}');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('.logo .header-logo img , .logo-footer img, .group-logo .img-logo').attr('src', '{{ asset("images/logo/logo-white-color-1.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-color-1.png")}}');
            }
        </script>
        <!-- LIBRARY JS-->
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('libs/detect-browser/browser.js') }}"></script>
        <script src="{{ asset('libs/smooth-scroll/jquery-smoothscroll.js') }}"></script>
        <script src="{{ asset('libs/wow-js/wow.min.js') }}"></script>
        <script src="{{ asset('libs/slick-slider/slick.min.js') }}"></script>
        <script src="{{ asset('libs/selectbox/js/jquery.selectbox-0.2.js') }}"></script>
        <script src="{{ asset('libs/please-wait/please-wait.min.js') }}"></script>
        <script src="{{ asset('libs/fancybox/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('libs/fancybox/js/jquery.fancybox-buttons.js') }}"></script>
        <script src="{{ asset('libs/fancybox/js/jquery.fancybox-thumbs.js') }}"></script>
        <!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")-->
        <!-- MAIN JS-->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- LOADING JS FOR PAGE-->
        <script src="{{ asset('js/pages/home-page.js') }}"></script>
        <script src="{{ asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script>
            var logo_str = '{{ asset("images/logo/logo-black-color-1.png")}}';
            if (Cookies.set('color-skin'))
            {
                logo_str = '{{ asset("images/logo/logo-black-' + Cookies.set('color-skin') + '.png")}}';
            }
            window.loading_screen = window.pleaseWait(
            {
                logo: logo_str,
                backgroundColor: '#fff',
                loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
            });
        </script>
</body>
</html>
