<!DOCTYPE html>
<html>

<head>
    <title>Fedex shipping delivery</title>
    <meta name="description" content="Fedex shipping delivery">
    <meta name="author" content="pixel-industry">
    <meta name="keywords" content="Fedex shipping delivery">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    {{-- @stack('link') --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" /><!-- bootstrap grid -->
    <link rel="stylesheet" href="{{ asset('assets/masterslider/style/masterslider.css') }}" />
    <!-- Master slider css -->
    <link rel="stylesheet" href="{{ asset('assets/masterslider/skins/default/style.css') }}" />
    <!-- Master slider default skin -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" /><!-- animations -->
    <link rel='stylesheet' href="{{ asset('assets/owl-carousel/owl.carousel.css') }}" /><!-- Client carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /><!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/color-default.css') }}" /><!-- template main color -->
    <link rel="stylesheet" href="{{ asset('assets/css/retina.css') }}" /><!-- retina ready styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" /><!-- responsive styles -->

    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600'
        rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <!-- Fontawesome icons css -->

    <link rel="stylesheet" href="style-switcher/styleSwitcher.css" /><!-- styleswitcher -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
        margin: 0 !important;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('assets/img/slider/slide01.jpg') }}");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        width: 100%;
        margin: auto;
    }

    /* .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

    .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
    }

    .hero-text button:hover {
        background-color: #555;
        color: white;
    } */
    .borderform:focus {
        outline: none;
        border: 1px solid #0000ff85;
    }

    .radius {
        border-radius: 5%;
    }

</style>

<body>

    @include('client.layout.header')
    @yield('content')
    @include('client.layout.footer')



    {{-- @yield('scripts') --}}
    <script>
        $(document).ready(function() {
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function() {
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function() {
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function() {
                $("#myCarousel").carousel(2);
            });
            $(".item4").click(function() {
                $("#myCarousel").carousel(3);
            });

            // Enable Carousel Controls
            $(".left").click(function() {
                $("#myCarousel").carousel("prev");
            });
            $(".right").click(function() {
                $("#myCarousel").carousel("next");
            });
        });
    </script>
    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script><!-- jQuery library -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- .bootstrap script -->
    <script src="{{ asset('assets/js/jquery.srcipts.min.js') }}"></script><!-- modernizr, retina, stellar for parallax -->
    <script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script><!-- Carousels script -->
    <script src="{{ asset('assets/masterslider/masterslider.min.js') }}"></script><!-- Master slider main js -->
    <script src="{{ asset('assets/js/jquery.matchHeight-min.js') }}"></script><!-- for columns with background image -->
    <script src="{{ asset('assets/js/jquery.dlmenu.min.js') }}"></script><!-- for responsive menu -->
    <script src="{{ asset('assets/style-switcher/styleSwitcher.js') }}"></script><!-- styleswitcher script -->
    <script src="{{ asset('assets/js/include.js') }}"></script><!-- custom js functions -->

    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function($) {
            'use strict';

            function equalHeight() {
                $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function() {
                    var maxHeight = $(this).outerHeight();
                    $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                });
            };

            $(document).ready(equalHeight);
            $(window).resize(equalHeight);

            // MASTER SLIDER START 
            var slider = new MasterSlider();
            slider.setup('masterslider', {
                width: 1140, // slider standard width
                height: 854, // slider standard height
                space: 0,
                speed: 50,
                layout: "fullwidth",
                centerControls: false,
                loop: true,
                autoplay: true
                // more slider options goes here...
                // check slider options section in documentation for more options.
            });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');

            // CLIENTS CAROUSEL START 
            $('#client-carousel').owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    600: {
                        items: 3,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true
                    }
                }
            });

            // TESTIMONIAL CAROUSELS START
            $('#testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                autoheight: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    600: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true,
                        autoHeight: true
                    }
                }
            });
        });
    </script>
</body>

</html>
