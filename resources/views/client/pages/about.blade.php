@extends('client.layout.master')
@section('content')
    <div class="page-title-style01 page-title-negative-top pt-bkg02">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>ABOUT US</h1>

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


    <div class="page-content" style="background-color: #ADD8E6; margin-top: -70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading3">
                        <h2 class="none" style="margin-top: 25px !important" >WHO ARE WE?</h2>
                    </div><!-- .custom-heading end -->

                    <p class="fsize">
                        Fedex Shipping Delivery is a top global provider of transportation and logistics services, with a highly integrated network of people, technology and physical assets.

                        We use our network to help customers manage their goods most efficiently throughout their supply chains. At the top of our value proposition is an intense customer service culture that connects our team worldwide. Our people focus on finding new ways to help our customers succeed, while becoming continuously more efficient ourselves.
                        
                    </p>
                    
                    <p class="fsize">
                        Customer relationships are the lifeblood of our business. However, we never forget that our company has responsibilities to many other stakeholders as well: investors, employees, carriers, business partners, local communities and global society. When we say Let’s Move the World Forward, we’re speaking to the interests of all Trans Atlantic Delivery Line stakeholders, as well as the world at large.
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 animated triggerAnimation " data-animate="zoomIn">
                    <img style="margin-top: 40px" class="radius" src="{{asset('assets/img/pics/shipping02.jpg')}}" alt="" />
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-light-blue ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>TO OUR CUSTOMERS</h2>
                    </div><!-- .custom-heading end -->

                    <p>Fedex Shipping Delivery is committed to provide the highest level of quality service to our Customers. We aim to be amongst the industry’s top service providers by ensuring:
                        
                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Unsurpassed customer service of the highest standard
                            </li>
    
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                        Reasonable and competitive pricing, which is constantly monitored and updated.</li>
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Personalized service, tailored to our customers specific requirements and needs.
                            </li>
    
                        </ul><!-- .fa-ul end -->
                       
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>TO OUR EMPLOYEES</h2>
                    </div><!-- .custom-heading end -->

                    <P>
                        We are committed to providing a safe and stable working environment to our employees.Every employee is given equal opportunity to learn and for personal growth. Creativity and innovation are encouraged for improving the effectiveness of Trans Atlantic Delivery Line. Employees will be provided the same concern, respect and caring attitude within the organization that they are expected to share externally with every Fedex Shipping Delivery customer.
                    </P>
                </div><!-- .col-md-6 end -->
                <div class="col-md-12 text-center">
                    <div class="custom-heading2 col-md-12 text-centerg">
                        <h2>TO OUR PARTNERS and VENDORS</h2>
                    </div><!-- .custom-heading end -->

                    <P class="text-center">We at Fedex Shipping Delivery are committed to build long term business relationships with our partners.Trans Atlantic Delivery Line will continue to seek opportunities to further develop and expand our range of services and to ensure that we are all well aware of industry changes and developments as and when these arise.
                    </P>
                </div>
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
