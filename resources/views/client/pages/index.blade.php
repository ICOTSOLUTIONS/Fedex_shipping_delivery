@extends('client.layout.master')
@section('content')
    {{-- @push('link')
      
    @endpush
    <style>
     
    </style> --}}

    <div class="container">
        {{-- <h2>Activate Carousel with JavaScript</h2> --}}
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
                <li class="item4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="{{ asset('assets/img/slider/slide01.jpg') }}" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/slider/slide02.jpg') }}" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/slider/slide03.jpg') }}" alt="Flower" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Flowers</h3>
                        <p>Beautiful flowers in Kolymbari, Crete.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Flowers</h3>
                        <p>Beautiful flowers in Kolymbari, Crete.</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Carousel Default -->
    {{-- <div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide vertical">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="{{ asset('assets/img/slider/slide01.jpg') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/slider/slide02.jpg') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/slider/slide03.jpg') }}">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
</div> --}}
    {{-- <div class="hero-image">
        <div class="hero-text">
            {{-- <h1 style="font-size:50px">I am John Doe</h1>
            <p>And I'm a Photographer</p>
            <button>Hire me</button> 
        </div>
    </div> --}}

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
                                <h4>Lorem, ipsum.</h4>
                            </div><!-- .custom-heading end -->

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, officia..
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
                                <h4>Lorem, ipsum.</h4>
                            </div><!-- .custom-heading end -->

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit placeat, ab voluptate
                                facilis nisi tempora beatae similique modi excepturi maiores?
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
                                <h4>Lorem, ipsum.</h4>
                            </div><!-- .custom-heading end -->

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, cum temporibus rerum
                                consequuntur ut doloribus.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <a href="services02.html" class="btn btn-big btn-yellow btn-centered">
                        <span>
                            lorem
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
                        <h2>Lorem, ipsum.</h2>
                        <p>
                            Lorem, ipsum dolor.
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
                            <h3>Lorem, ipsum.</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati odio quae quidem
                                molestiae excepturi labore, nobis reprehenderit facere distinctio quasi?
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
                            <h3>Lorem ipsum dolor sit.</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia saepe rem eum expedita eaque
                                quaerat illum impedit deserunt deleniti a!
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
                            <h3>Lorem, ipsum dolor.</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit recusandae eius atque
                                laudantium aut magni architecto cupiditate, vitae incidunt nesciunt.
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
                            <h3>Lorem, ipsum.</h3>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam aliquam maxime reprehenderit
                                veniam blanditiis odio animi voluptatem rerum laborum excepturi?
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
                        <h3>Lorem, ipsum.</h3>
                    </div><!-- .custom-heading end -->

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, perferendis ipsam accusamus
                        voluptatem delectus sint! </p>

                    <ul class="service-list clearfix">
                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-cargo-box-2.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Lorem, ipsum.
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-mark-energy.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Lorem, ipsum.
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-food-beverage.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Lorem, ipsum.
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-cargo-retail.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Lorem, ipsum.
                            </p>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="svg-white" src="{{ asset('assets/img/svg/pi-truck-8.svg') }}"
                                    alt="icon" />
                            </div><!-- .icon-container end -->

                            <p>
                                Lorem, ipsum dolor.
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
                        <h3>Lorem, ipsum.</h3>
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
                                        000 00, 0000
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        Lorem, ipsum.
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
                                        000 00, 0000
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        Lorem ipsum dolor sit amet.
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
                        <h3>Lorem, ipsum dolor.</h3>
                    </div><!-- .custom-heading end -->

                    <div class="carousel-container">
                        <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptatibus totam
                                        sapiente tempore illo delectus ad eaque beatae veritatis ab.
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            Lorem, ipsum. <br />
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, id ex eos
                                            obcaecati culpa aspernatur, sint aliquam quisquam quasi error iusto beatae
                                            recusandae modi autem sunt magnam nisi dignissimos cupiditate.
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto corrupti unde,
                                        corporis dicta expedita amet, iure porro molestias animi ipsam similique, rem minima
                                        labore veniam!
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            Lorem, ipsum., <br />
                                            Lorem, ipsum dollar.
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="testimonial">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum corporis culpa autem
                                        inventore ad nesciunt voluptatibus molestias eius voluptate aspernatur aliquid
                                        reprehenderit beatae, eum pariatur quasi a maiores aliquam magni.
                                    </p>

                                    <div class="testimonial-author">
                                        <p>
                                            Lorem, ipsum., <br />
                                            Lorem, ipsum dolor.
                                        </p>
                                    </div><!-- .testimonial-author end -->
                                </div><!-- .testimonial end -->
                            </div><!-- .owl-item end -->
                        </div><!-- #testimonial-carousel end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-12 clearfix">
                    <div class="custom-heading">
                        <h3>Lorem, ipsum.</h3>
                    </div><!-- .custom-heading end -->

                    <img src="{{ asset('assets/img/pics/locations.jpg') }}" alt="locations illustration" />

                    <br />

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis quasi nostrum quia, ab
                        voluptatem!
                    </p>

                    <a href="locations.html" class="read-more">
                        <span>
                            Lorem, ipsum dolor.
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection
{{-- @push('scripts') --}}
{{-- @endpush --}}
