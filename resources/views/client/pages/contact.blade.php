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
                                <a href="#">/contact</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <!-- .page-title start -->
    <div class="page-title-map page-title-negative-top">
        <!-- .container start -->
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>lorem</h3>
                    </div><!-- .custom-heading.left end -->

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eligendi saepe magnam
                        asperiores et illo expedita qui iste ducimus corrupti, natus iusto! Dolorum veritatis cum eum vel!
                        Porro, rerum impedit!
                    </p>

                    <br />

                    <div class="custom-heading">
                        <h4>Lorem, ipsum.</h4>
                    </div><!-- .custom-heading end -->

                    <address>
                        123 Second Street Fifth Avenue, <br />
                        Manhattan, California
                    </address>

                    <span class="text-big colored">
                        +00 41 258 489 6587
                    </span>
                    <br />

                    <a href="mailto:">Fedexshippingdelivery54@gmail.com</a>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 clearfix">
                    <!-- .contact form start -->
                    <form class="wpcf7">
                        <fieldset>
                            <label>
                                <span class="required">*</span> Your request:
                            </label>

                            <select class="borderform wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                <option value="lorem ipsum">lorem ipsum</option>
                                <option value="I need an offer for air freight">I need an offer for air freight</option>
                                <option value="lorem ipsum">lorem ipsum lorem ipsum</option>
                                <option value="lorem ipsum">lorem ipsum</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> First Name:
                            </label>

                            <input type="text" class="borderform wpcf7-text" id="contact-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Last Name:
                            </label>

                            <input type="text" class="borderform wpcf7-text" id="contact-last-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Email:
                            </label>

                            <input type="url" class="borderform wpcf7-text" id="contact-email">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Message:
                            </label>

                            <textarea rows="8" class="borderform wpcf7-textarea" id="contact-message"></textarea>
                        </fieldset>

                        <input type="submit" class="wpcf7-submit" value="send" />
                    </form><!-- .wpcf7 end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection
<script>
    /* <![CDATA[ */
    jQuery(document).ready(function($) {
        'use strict';
        // GOOGLE MAPS START
        var locations = [
            ['London Trucking Headquarters', 51.50013, -0, 126305, 4],
            ['Trucking Headquarters Paris', 48.8566667, 2.3509871, 5],
            ['Trucking Warehouse, Oslo', 59.9138204, 10.7387413, 3],
            ['Trucking Vehicle Fleet, Rome', 41.8954656, 12.4823243, 2],
            ['Trucking Support Center, Madrid', 40.4166909, -3.7003454, 1],
            ['Trucking airport, Moscow', 55.755786, 37.617633, 6],
            ['Trucking Warehouse, Prague', 50.0878114, 14.4204598, 7],
            ['Trucking Warehouse, Quebec', 52.9399159, -73.5491361, 8],
            ['Trucking Headquarters, Ontario', 51.590723, -86.396484, 9],
            ['Trucking Vehicle Fleet, Montana', 46.860191, -109.599609, 10],
            ['Trucking Support Center, Alberta', 56.46249, -114.960937, 11],
            ['Trucking Vehicle Fleet, Yukon', 63.332413, -136.098633, 12],
            ['Trucking Headquarters Minesota', 46.729553, -94.6858998, 13],
            ['Trucking Headquarters Virginia Beach', 36.8529263, -75.977985, 14],
            ['Trucking Headquarters Chicago', 41.850033, -87.6500523, 15],
            ['Trucking Headquarters Athens', 37.926868, 23.730469, 16],
            ['Trucking Headquarters New Delhi', 28.574874, 77.299805, 17]
        ];


        var style = [{
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                        "saturation": 1
                    },
                    {
                        "gamma": 1
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "hue": "#e6ff00"
                    }
                ]
            },
            {
                "elementType": "geometry",
                "stylers": [{
                    "saturation": -85
                }]
            }
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            // SET THE CENTER
            center: new google.maps.LatLng(50.0878114, 14.4204598),
            // SET THE MAP STYLE & ZOOM LEVEL
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: 3,
            // SET THE BACKGROUND COLOUR
            backgroundColor: "#eeeeee",
            // REMOVE ALL THE CONTROLS EXCEPT ZOOM
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true,
            scrollwheel: false,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            }
        });

        var mapType = new google.maps.StyledMapType(style, {
            name: "Grayscale"
        });
        map.mapTypes.set('grey', mapType);
        map.setMapTypeId('grey');

        var infowindow = new google.maps.InfoWindow();

        //CREATE A CUSTOM PIN ICON
        var marker_image = 'img/pin.png';
        var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: pinIcon
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                };
            })(marker, i));
        };

        // CONTACT FORM AJAX SUBMIT START
        $('.wpcf7 .wpcf7-submit').on('click', function(event) {
            event.preventDefault();
            var inquiry = $('#contact-inquiry option:selected').text();
            var name = $('#contact-name').val();
            var lastname = $('#contact-last-name').val();
            var email = $('#contact-email').val();
            var contact_message = $('#contact-message').val();
            var form_data = new Array({
                'inquiry': inquiry,
                'name': name,
                'last_name': lastname,
                'email': email,
                'message': contact_message
            });
            $.ajax({
                type: 'POST',
                url: "contact.php",
                data: ({
                    'action': 'contact',
                    'form_data': form_data
                })
            }).done(function(data) {
                alert(data);
            });
        }); // CONTACT FORM AJAX SUBMIT END
    });
    /* ]]> */
</script>
