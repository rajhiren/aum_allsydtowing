<div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">
                                    <h3>About Us</h3>
                                </div>

                                <p>
                                    For all your accident/breakdowns/trade needs in Sydney and surrounds! Call All Sydney Towing 0423808240 for the cheapest prices and reliable service
                                </p>


                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                	<li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>

                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Facebook</h3>
                                </div>

                                <ul>
                                	<div class="fb-page" height="300px" width="250px" data-href="https://www.facebook.com/653173301411398" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/653173301411398" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/653173301411398">All Sydney Towing</a></blockquote></div>
                                   <div id="fb-root" ></div>
									<script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    All Sydney Towing Pty Ltd,<br>
									3/86 falconer st, West Ryde,<br>
									NSW - 2144.<br>

                                </address>

                                <span class="text-big">
                                    0423 808 240
                                </span>
                                <br />

                                <a href="mailto:">allsydneytowing@yahoo.com.au</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="https://www.facebook.com/653173301411398" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <div class="copyright-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>ALL SYDNEY TOWING <?php echo @date("Y"); ?>. All RIGHTS RESERVED.</p>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <p class="align-right">Developed By <a href="http://auminfotech.com.au/">Aum Infotech</a></p>
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="js/include.js"></script><!-- custom js functions -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> <!-- google maps -->
       	<script src="js/jquery.ui.map.full.min.js"></script><!-- google maps -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var nottingham = new google.maps.LatLng(-33.833900, 151.014654);

                    var style = [
                        {"featureType": "road",
                            "elementType":
                                    "labels.icon",
                            "stylers": [
                                {"saturation": 1},
                                {"gamma": 1},
                                {"visibility": "on"},
                                {"hue": "#e6ff00"}
                            ]
                        },
                        {"elementType": "geometry", "stylers": [
                                {"saturation": -85}
                            ]
                        }
                    ];

                    var mapOptions = {
                        // SET THE CENTER
                        center: nottingham,
                        // SET THE MAP STYLE & ZOOM LEVEL
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: 9,
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

                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    // SET THE MAP TYPE
                    var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');

                    //CREATE A CUSTOM PIN ICON
                    var marker_image = 'img/pin.png';
                    var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                    marker = new google.maps.Marker({
                        position: nottingham,
                        map: map,
                        icon: pinIcon,
                        title: 'Trucking Headquarters, Nothingham'
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);

                // CONTACT FORM AJAX SUBMIT START
                $('.wpcf7 .wpcf7-submit').on('click', function (event) {
                    event.preventDefault();
                    var inquiry = $('#contact-inquiry option:selected').text();
                    var name = $('#contact-name').val();
                    var lastname = $('#contact-last-name').val();
                    var email = $('#contact-email').val();
                    var contact_message = $('#contact-message').val();
                    var form_data = new Array({'inquiry': inquiry, 'name': name, 'last_name': lastname, 'email': email, 'message': contact_message});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'contact', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // CONTACT FORM AJAX SUBMIT END

            });
            /* ]]> */

            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 530, // slider standard height
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    speed: 40,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');


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

                // QUOTE FORM START
                $('.shipping-quote .submit').on('click', function (event) {
                    event.preventDefault();
                    var tracking_origin = $('#tracking-origin').val();
                    var tracking_destination = $('#tracking-destination').val();
                    var tracking_weight = $('#tracking-weight').val();
                    var tracking_packages = $('#tracking-packages').val();
                    var tracking_email = $('#tracking-email').val();
                    var form_data = new Array({'origin_zip': tracking_origin, 'destination_zip': tracking_destination, 'total_weight': tracking_weight, 'number_of_packages': tracking_packages, 'email': tracking_email});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'shipping', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // QUOTE FORM AJAX SUBMIT END
            });
            /* ]]> */
        </script>
