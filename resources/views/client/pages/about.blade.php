@extends('client.layout.master')
@section('content')
    <div class="page-title-style01 page-title-negative-top pt-bkg02">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>lorem ipsum lorem ipsum</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">/About</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>lorem ipsum</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                    </p>
                    
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 animated triggerAnimation " data-animate="zoomIn">
                    <img class="radius" src="{{asset('assets/img/pics/shipping02.jpg')}}" alt="" />
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>our mission</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum aut debitis eaque
                        consequuntur commodi sequi sit ut totam tempore fugit, nulla, nesciunt porro nisi laboriosam optio
                        nam doloremque repudiandae.
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>our promise</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem  lorem ipsum lorem ipsum lorem ipsum.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem  ipsum lorem ipsum lorem ipsum.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            lorem ipsum lorem  lorem  ipsum.
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.custom-bkg end -->

    {{-- <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="custom-heading02">
                    <h2>Our core values</h2>
                    <p>THE THING THAT MAKES US DIFFERENT</p>
                </div>
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <h4>Always learning</h4>

                        <p>
                            Cozy sphinx waves quart jug of bad milk. A
                            very bad quack might jinx zippy fowls. Few
                            quips galvanized the mock jury box.
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <h4>Latest Technology</h4>

                        <p>
                            Cozy sphinx waves quart jug of bad milk. A
                            very bad quack might jinx zippy fowls. Few
                            quips galvanized the mock jury box.
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cubes"></i>
                        </div>

                        <h4>Safety & Quality</h4>

                        <p>
                            Cozy sphinx waves quart jug of bad milk. A
                            very bad quack might jinx zippy fowls. Few
                            quips galvanized the mock jury box.
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-tree"></i>
                        </div>

                        <h4>Care for Environment</h4>

                        <p>
                            Cozy sphinx waves quart jug of bad milk. A
                            very bad quack might jinx zippy fowls. Few
                            quips galvanized the mock jury box.
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-9">
                    <div class="custom-heading">
                        <h2>board of directors</h2>
                    </div><!-- .custom-heading end -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team01.jpg" alt="" />
                                <div class="team-details">
                                    <h5>martha parker</h5>
                                    <p class="position">
                                        Company founder
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team02.jpg" alt="" />
                                <div class="team-details">
                                    <h5>jonathan blum</h5>
                                    <p class="position">
                                        Chief Technical Officer
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team03.jpg" alt="" />
                                <div class="team-details">
                                    <h5>tom beck</h5>
                                    <p class="position">
                                        Chief Operations Officer
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-9 end -->

                <div class="col-md-3">
                    <div class="custom-heading">
                        <h2>join our team</h2>
                    </div><!-- .custom-heading end -->

                    <div class="promo-box promo-bkg01">
                        <h4>Drivers needed</h4>
                        <p>
                            We are hiring drivers and have 2 opened
                            positions. See what we offer and what we need
                            and apply today!
                        </p>

                        <a href="driver-application.html" class="btn btn-medium btn-yellow">
                            <span>apply now</span>
                        </a>
                    </div><!-- .promo-box end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end --> --}}
@endsection
