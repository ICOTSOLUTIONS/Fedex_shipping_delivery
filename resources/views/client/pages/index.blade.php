@extends('client.layout.master')
{{-- @push('link')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
@endpush --}}
@section('content')
    {{-- <div id="masterslider" class="master-slider ms-skin-default mb-0">
        <!-- first slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{ asset('assets/img/slider/slide01.jpg') }}"
                data-src="{{ asset('assets/img/slider/slide01.jpg') }}" alt="Strongest distribution network" />

            <img class="ms-layer" src="{{ asset('assets/img/slider/slider-line.jpg') }}"
                data-src="{{ asset('assets/img/slider/slider-line.jpg') }}" alt="" style="left: 0; top: 310px;"
                data-type="image" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="0" />

            <h2 class="ms-layer pi-caption01" style="left: 0; top: 340px;" data-type="text" data-effect="left(short)"
                data-duration="300" data-hide-effect="fade" data-delay="300">
                strongest
            </h2>

            <h2 class="ms-layer pi-caption01" style="left: 0; top: 400px;" data-type="text" data-effect="left(short)"
                data-duration="300" data-hide-effect="fade" data-delay="600">
                distribution
            </h2>

            <h2 class="ms-layer pi-caption01" style="left: 0; top: 460px;" data-type="text" data-effect="left(short)"
                data-duration="300" data-hide-effect="fade" data-delay="900">
                network
            </h2>
        </div><!-- .ms-slide end -->

        <!-- slide 02 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slide02.jpg') }}" alt="International Air freight" />

            <h2 class="ms-layer pi-caption01" style="left: 58px; top: 390px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="0">
                International Air Freight
            </h2>

            <img class="ms-layer" src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slider-line.jpg') }}" alt="" style="left: 540px; top: 450px;"
                data-type="image" data-effect="bottom(short)" data-duration="300" data-hide-effect="fade"
                data-delay="300" />

            <p class="ms-layer pi-text" style="left: 375px; top: 470px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="600">
                Fast International Air Delivery
            </p>
        </div><!-- .ms-slide end -->

        <!-- slide 03 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slide03.jpg') }}" alt="Worldwide freight services" />

            <h2 class="ms-layer pi-caption01" style="left: 258px; top: 390px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="0">
                Freight services
            </h2>

            <img class="ms-layer" src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slider-line.jpg') }}" alt="" style="left: 540px; top: 450px;"
                data-type="image" data-effect="bottom(short)" data-duration="300" data-hide-effect="fade"
                data-delay="300" />

            <p class="ms-layer pi-text" style="left: 278px; top: 470px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="600">
                Road, air, train or overseas. We got it covered!
            </p>
        </div><!-- .ms-slide slide03 end -->

        <!-- slide 04 start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slide04.jpg') }}" alt="Worldwide freight services" />

            <h2 class="ms-layer pi-caption01" style="left: 388px; top: 390px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="00">
                Trucking
            </h2>

            <img class="ms-layer" src="{{ asset('assets/masterslider/blank.gif') }}"
                data-src="{{ asset('assets/img/slider/slider-line.jpg') }}" alt="" style="left: 540px; top: 450px;"
                data-type="image" data-effect="bottom(short)" data-duration="300" data-hide-effect="fade"
                data-delay="300" />

            <p class="ms-layer pi-text" style="left: 265px; top: 470px;" data-type="text" data-effect="top(short)"
                data-duration="300" data-hide-effect="fade" data-delay="600">
                Powerful Transport & Logistics Web Solution
            </p>
        </div><!-- .ms-slide slide04 end -->
    </div><!-- #masterslider end --> --}}

    {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slider/slide01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slider/slide02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slider/slide03.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

    <div class="hero-image">
        <div class="hero-text">
            {{-- <h1 style="font-size:50px">I am John Doe</h1>
            <p>And I'm a Photographer</p>
            <button>Hire me</button> --}}
        </div>
    </div>

    <div class="page-content parallax parallax01 mb-70">
        <div class="container">
            <div class="row services-negative-top">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('assets/img/pics/img01.jpg') }}" alt="Trucking" />

                            <a href="overland-transportation.html" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>GROUND SHIPPING</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We have a wide experience in overland
                                industry specific logistic solutions like
                                pharmaceutical logistics, retail and
                                automotive logistics by train or road.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('assets/img/pics/img02.jpg') }}" alt="Trucking" />

                            <a href="large-projects.html" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>LARGE PROJECTS</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We bring your goods safely to worldwide
                                destinations with our great sea fright
                                services. We offer LLC and FLC shipments
                                that are fast and effective with no delays.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{ asset('assets/img/pics/img03.jpg') }}" alt="Trucking" />

                            <a href="air-freight.html" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>INTERNATIONAL AIR FREIGHT</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We provide full supply chain management
                                package including cost effective and fast
                                sea freight. You can also combine this
                                package with other means of transportation.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <a href="services02.html" class="btn btn-big btn-yellow btn-centered">
                        <span>
                            view details
                        </span>
                    </a>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->



    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>What we Offer</h2>
                        <p>
                            TAILORED LOGISTIC SERVICES
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row mb-30">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{ asset('assets/img/svg/pi-checklist-2.svg') }}" alt="checklist icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Contract logistics</h3>

                            <p>
                                Need custom logistic service? We got it
                                covered. From overland, air, rail and sea
                                transportation. Fast, safe and accurate
                                shipment provided all over the globe.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{ asset('assets/img/svg/pi-globe-5.svg') }}" alt="globe icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Overland, Ocean and Air Freight</h3>

                            <p>
                                Trucking company offers the best logistics
                                services using all mens of supply chain. Use
                                our overland, ocean and air freight solutions
                                for shipment of your goods.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{ asset('assets/img/svg/pi-forklift-truck-5.svg') }}" alt="forktruck icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Warehousing and Storage</h3>

                            <p>
                                Trucking offers intelligent warehouse solution.
                                Lower your storage and good maintenance by
                                using our modern and intelligent warehouses.
                                You can see all locations on location page.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{ asset('assets/img/svg/pi-touch-desktop.svg') }}" alt="touch icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Consulting Services</h3>

                            <p>
                                Don't know what mean of transportation
                                would be right for you, or you need someone
                                for full supply chain management? Please contact
                                us. Our team of professionals will be happy to help.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-dark-blue column-img-bkg dark mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                    <div class="custom-heading">
                        <h3>INDUSTRY SECTORS COVERAGE</h3>
                    </div><!-- .custom-heading end -->

                    <p>
                        We cover different industry sectors, from food and
                        beverage, chemical, retail, durable goods and more.
                        Check the full list.
                    </p>

                    <ul class="service-list clearfix">
                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-cargo-box-2.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Consumer Packaged Goods
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-mark-energy.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Chemical Goods
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-food-beverage.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Food and Beverage
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-cargo-retail.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Retail Goods
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-truck-8.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Energy, Oil and Gas
                            </p>
                        </li>
                    </ul><!-- .service-list end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 img-bkg01">
                    <div>&nbsp;</div>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.bkg-dark-blue end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="custom-heading">
                        <h3>company news</h3>
                    </div><!-- .custom-heading end -->

                    <ul class="pi-latest-posts clearfix">
                        <li>
                            <div class="post-media">
                                <img src="{{ asset('assets/img/blog/latest01.jpg') }}" alt="" />
                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <div class="post-date">
                                    <p>
                                        <i class="fa fa-calendar"></i>
                                        MAY 15, 2015
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        Trucking - Company of the Year 2014
                                    </h4>
                                </a>

                                <a href="news-single.html" class="read-more">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>

                        <li>
                            <div class="post-media">
                                <img src="{{ asset('assets/img/blog/latest02.jpg') }}" alt="" />
                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <div class="post-date">
                                    <p>
                                        <i class="fa fa-calendar"></i>
                                        MAY 15, 2015
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        First quartal 2015 revenue report released
                                    </h4>
                                </a>

                                <a href="news-single.html" class="read-more">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>
                    </ul><!-- .pi-latest-posts end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-heading">
                        <h3>what clients say</h3>
                    </div><!-- .custom-heading end -->

                    <div class="carousel-container">
                        <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>
                                        Best customer support and
                                        response time I have ever seen...
                                        not to mention a kick ass theme!
                                        Great feeling from this purchase.
                                        Thank you Pixel Industry!
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            TRAVIS COPLAND, <br />
                                            Transport & Logistics Solutions
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>
                                        Thanks for developing
                                        products to help many people
                                        to work as I do. Thank you!
                                        Success for all! I did not
                                        need to use the support,
                                        this never happened to me.
                                        Pocket Theme bought today
                                        for another client, very
                                        good too! Hug!
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            ADRIANOSP, <br />
                                            Themeforest member
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>
                                        We have several sites now
                                        built in Elvyre across
                                        several servers and have had
                                        almost zero issues. The
                                        documentation is great and
                                        the featureset is phenomenal.
                                        It is the best looking
                                        pro-level and fairly easy-to-implement
                                        advanced theme we are currently
                                        regularly using. The end product
                                        is great and easy to use and
                                        configure. Highly recommended...
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            DIGITALMARKETINGASSOCIATES, <br />
                                            Themeforest member
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->
                        </div><!-- #testimonial-carousel end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-12 clearfix">
                    <div class="custom-heading">
                        <h3>our locations</h3>
                    </div><!-- .custom-heading end -->

                    <img src="{{ asset('assets/img/pics/locations.jpg') }}" alt="locations illustration" />

                    <br />

                    <p>
                        Trucking Co. covers over 150 locations all
                        over the globe plus numerous logistic
                        partner companies from different areas of
                        supply chain.
                    </p>

                    <a href="locations.html" class="read-more">
                        <span>
                            View all locations
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client01.png') }}" alt="" />
                            </div>
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client02.png') }}" alt="" />
                            </div>
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client03.png') }}" alt="" />
                            </div>
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client04.png') }}" alt="" />
                            </div>
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client05.png') }}" alt="" />
                            </div>
                            <div class="owl-item"><img src="{{ asset('assets/img/pics/client06.png') }}" alt="" />
                            </div>
                        </div><!-- .owl-carousel.owl-carousel-navigation end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection
{{-- @push('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endpush --}}
