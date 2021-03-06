<?php
session_start();

// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khonike - Real Estate Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="../assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!-- Header -->
        <?php
        include_once('header.php');
        ?>


        <!--Page Banner Section start-->
        <div class="page-banner-section section" style="background-image: url(../assets/images/bg/single-property-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Properties</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Friuli-Venezia Giulia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->

        <!--New property section start-->
        <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 order-1 order-lg-2 mb-sm-50 mb-xs-50">
                        <div class="row">

                            <!--Property start-->
                            <div class="single-property col-12 mb-50">
                                <div class="property-inner">

                                    <div class="head">
                                        <div class="left">
                                            <h1 class="title">Friuli-Venezia Giulia</h1>
                                            <span class="location"><img src="../assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>
                                        </div>
                                        <div class="right">
                                            <div class="type-wrap">
                                                <span class="price">$550<span>Month</span></span>
                                                <span class="type">For Rent</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="image mb-30">
                                        <div class="single-property-gallery">
                                            <div class="item"><img src="../assets/images/property/single-property-1.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-2.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-3.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-4.jpg" alt=""></div>
                                        </div>
                                        <div class="single-property-thumb">
                                            <div class="item"><img src="../assets/images/property/single-property-1-thumb.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-2-thumb.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-3-thumb.jpg" alt=""></div>
                                            <div class="item"><img src="../assets/images/property/single-property-4-thumb.jpg" alt=""></div>
                                        </div>
                                    </div>

                                    <div class="content">

                                        <h3>Description</h3>

                                        <p>Khonike - Real Estate Bootstrap 4 Templateipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut quipx ea codo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolo.</p>
                                        <p>Khonike - Real Estate Bootstrap 4 Templateis the Best should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore lore gna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacm emod tempor nt ut labore lore magna iqua. Ut enim ad minim veniamco laboris nisi ut aliqu.</p>
                                        <p>Khonike - Real Estate Bootstrap 4 Templateis the Best should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore lore gna iqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                        <div class="row mt-30 mb-30">

                                            <div class="col-md-5 col-12 mb-xs-30">
                                                <h3>Condition</h3>
                                                <ul class="feature-list">
                                                    <li>
                                                        <div class="image"><img src="../assets/images/icons/area.png" alt=""></div>Area 550 sqft
                                                    </li>
                                                    <li>
                                                        <div class="image"><img src="../assets/images/icons/bed.png" alt=""></div>Bedroom 6
                                                    </li>
                                                    <li>
                                                        <div class="image"><img src="../assets/images/icons/bath.png" alt=""></div>Bathroom 4
                                                    </li>
                                                    <li>
                                                        <div class="image"><img src="../assets/images/icons/parking.png" alt=""></div>Garage 2
                                                    </li>
                                                    <li>
                                                        <div class="image"><img src="../assets/images/icons/kitchen.png" alt=""></div>Kitchen 2
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-7 col-12">
                                                <h3>Amenities</h3>
                                                <ul class="amenities-list">
                                                    <li>Air Conditioning</li>
                                                    <li>Bedding</li>
                                                    <li>Balcony</li>
                                                    <li>Cable TV</li>
                                                    <li>Internet</li>
                                                    <li>Parking</li>
                                                    <li>Lift</li>
                                                    <li>Pool</li>
                                                    <li>Dishwasher</li>
                                                    <li>Toaster</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <h3>Video</h3>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8CbvItGX7Vk"></iframe>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h3>Location</h3>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <div id="single-property-map" class="embed-responsive-item google-map" data-lat="40.740178" data-Long="-74.190194"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Property end-->

                            <!--Comment start-->
                            <div class="comment-wrap col-12">
                                <h3>3 Feedback</h3>

                                <ul class="comment-list">
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="../assets/images/review/review-1.jpg" alt=""></div>
                                            <div class="content">
                                                <h5>Alvaro Santos</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">10 August, 2018 | 10 Min ago</span>
                                                    <a href="#" class="reply">reply</a>
                                                </div>
                                                <div class="decs">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="child-comment">
                                            <li>
                                                <div class="comment">
                                                    <div class="image"><img src="../assets/images/review/review-2.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Silvia Anderson</h5>
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="time">10 August, 2018 | 25 Min ago</span>
                                                            <a href="#" class="reply">reply</a>
                                                        </div>
                                                        <div class="decs">
                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="../assets/images/review/review-3.jpg" alt=""></div>
                                            <div class="content">
                                                <h5>Nicolus Christopher</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">10 August, 2018 | 35 Min ago</span>
                                                    <a href="#" class="reply">reply</a>
                                                </div>
                                                <div class="decs">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h3>Leave a Feedback</h3>

                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Name"></div>
                                            <div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>
                                            <div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>
                                            <div class="col-12"><button class="btn">send now</button></div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!--Comment end-->

                        </div>
                    </div>

                    <div class="col-lg-4 col-12 order-2 order-lg-1 pr-30 pr-sm-15 pr-xs-15">

                        <!--Sidebar start-->
                        <div class="sidebar">
                            <h4 class="sidebar-title"><span class="text">Search Property</span><span class="shape"></span></h4>


                            <!--Property Search start-->
                            <div class="property-search sidebar-property-search">

                                <form action="#">

                                    <div>
                                        <input type="text" placeholder="Location">
                                    </div>

                                    <div>
                                        <select class="nice-select">
                                            <option>All Cities</option>
                                            <option>Athina</option>
                                            <option>Austin</option>
                                            <option>Baytown</option>
                                            <option>Brampton</option>
                                            <option>Cedar Hill</option>
                                            <option>Chester</option>
                                            <option>Chicago</option>
                                            <option>Coleman</option>
                                            <option>Corpus Christi</option>
                                            <option>Dallas</option>
                                            <option>distrito federal</option>
                                            <option>Fayetteville</option>
                                            <option>Galveston</option>
                                            <option>Jersey City</option>
                                            <option>Los Angeles</option>
                                            <option>Midland</option>
                                            <option>New York</option>
                                            <option>Odessa</option>
                                            <option>Reno</option>
                                            <option>San Angelo</option>
                                            <option>San Antonio</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select class="nice-select">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select class="nice-select">
                                            <option>Type</option>
                                            <option>Apartment</option>
                                            <option>Cafe</option>
                                            <option>House</option>
                                            <option>Restaurant</option>
                                            <option>Store</option>
                                            <option>Villa</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select class="nice-select">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select class="nice-select">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                    <div>
                                        <div id="search-price-range"></div>
                                    </div>

                                    <div>
                                        <button>search</button>
                                    </div>

                                </form>

                            </div>
                            <!--Property Search end-->

                        </div>
                        <!--Sidebar end-->

                        <!--Sidebar start-->
                        <div class="sidebar">
                            <h4 class="sidebar-title"><span class="text">Feature Property</span><span class="shape"></span></h4>

                            <!--Sidebar Property start-->
                            <div class="sidebar-property-list">

                                <div class="sidebar-property">
                                    <div class="image">
                                        <span class="type">For Rent</span>
                                        <a href="single-properties.html"><img src="../assets/images/property/sidebar-property-1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h5>
                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>
                                        <span class="price">$550 <span>Month</span></span>
                                    </div>
                                </div>

                                <div class="sidebar-property">
                                    <div class="image">
                                        <span class="type">For Sale</span>
                                        <a href="single-properties.html"><img src="../assets/images/property/sidebar-property-2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Marvel de Villa</a></h5>
                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>
                                        <span class="price">$2550</span>
                                    </div>
                                </div>

                                <div class="sidebar-property">
                                    <div class="image">
                                        <span class="type">For Rent</span>
                                        <a href="single-properties.html"><img src="../assets/images/property/sidebar-property-3.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Ruposi Bangla Cottage</a></h5>
                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">215 L AH Rod, California</span>
                                        <span class="price">$550 <span>Month</span></span>
                                    </div>
                                </div>

                            </div>
                            <!--Sidebar Property end-->

                        </div>

                        <!--Sidebar start-->
                        <div class="sidebar">
                            <h4 class="sidebar-title"><span class="text">Top Agents</span><span class="shape"></span></h4>

                            <!--Sidebar Agents start-->
                            <div class="sidebar-agent-list">

                                <div class="sidebar-agent">
                                    <div class="image">
                                        <a href="single-properties.html"><img src="../assets/images/agent/agent-1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Donald Palmer</a></h5>
                                        <a href="#" class="phone">(756) 447 5779</a>
                                        <span class="properties">5 Properties</span>
                                        <div class="social">
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-agent">
                                    <div class="image">
                                        <a href="single-properties.html"><img src="../assets/images/agent/agent-2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Sean Hamilton</a></h5>
                                        <a href="#" class="phone">(756) 447 5779</a>
                                        <span class="properties">5 Properties</span>
                                        <div class="social">
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-agent">
                                    <div class="image">
                                        <a href="single-properties.html"><img src="../assets/images/agent/agent-3.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-properties.html">Christine Gilbert</a></h5>
                                        <a href="#" class="phone">(756) 447 5779</a>
                                        <span class="properties">5 Properties</span>
                                        <div class="social">
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Sidebar Agents end-->

                        </div>

                        <!--Sidebar start-->
                        <div class="sidebar">
                            <h4 class="sidebar-title"><span class="text">Popular Tags</span><span class="shape"></span></h4>

                            <!--Sidebar Tags start-->
                            <div class="sidebar-tags">
                                <a href="#">Houses</a>
                                <a href="#">Real Home</a>
                                <a href="#">Baths</a>
                                <a href="#">Beds</a>
                                <a href="#">Garages</a>
                                <a href="#">Family</a>
                                <a href="#">Real Estates</a>
                                <a href="#">Properties</a>
                                <a href="#">Location</a>
                                <a href="#">Price</a>
                            </div>
                            <!--Sidebar Tags end-->

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--New property section end-->

        <!--Footer section start-->
        <footer class="footer-section section" style="background-image: url(../assets/images/bg/footer-bg.jpg)">

            <!--Footer Top start-->
            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
                <div class="container">
                    <div class="row row-25">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <img src="../assets/images/logo-footer.png" alt="">
                            <p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit seddo dolor sit amet.</p>
                            <div class="footer-social">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Contact us</span><span class="shape"></span></h4>
                            <ul>
                                <li><i class="fa fa-map-o"></i><span>256, 1st AVE, Manchester 125 , Noth England</span></li>
                                <li><i class="fa fa-phone"></i><span><a href="#">+012 345 678 102</a><a href="#">+012 345 678 101</a></span></li>
                                <li><i class="fa fa-envelope-o"></i><span><a href="#">info@example.com</a><a href="#">www.example.com</a></span></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Useful links</span><span class="shape"></span></h4>
                            <ul>
                                <li><a href="#">Rental Builidngs</a></li>
                                <li><a href="#">Browe all Categories</a></li>
                                <li><a href="#">Top Mortagages Rates</a></li>
                                <li><a href="#">RentalTerms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Newsletter</span><span class="shape"></span></h4>

                            <p>Subscribe our newsletter and get all latest news about our latest properties, promotions, offers and discount</p>

                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." />
                                <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->

                        </div>
                        <!--Footer Widget end-->

                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy;2018 <a href="#">Khonike</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/map-place.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>