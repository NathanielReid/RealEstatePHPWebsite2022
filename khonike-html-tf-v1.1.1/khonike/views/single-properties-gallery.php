<?php
session_start();

// This is used to display the error messages
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Includes
include_once __DIR__ . "/../controllers/propertycontroller.class.php";
include_once __DIR__ . "/../controllers/photocontroller.class.php";
include_once __DIR__ . "/../controllers/roomcontroller.class.php";

// Instantiate
$propertyController = new PropertyController();
$photoController = new PhotoController();
$roomController = new RoomController();

// Get Property ID
$id = $_GET['propertyId'];

// Assign the array to a variable
$property = $propertyController->showPropertyById($id);
$propertyPhotos = $photoController->showAllPhotosByListingId($id);
$rooms = $roomController->showRoomsByPropertyId($id);
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
    <script>
        function expandPhoto(imgs) {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");
            // Get the image text
            var imgText = document.getElementById("imgtext");
            // Use the same src in the expanded image as the image being clicked on from the grid
            expandImg.src = imgs.src;
            // Use the value of the alt attribute of the clickable image as text inside the expanded image
            imgText.innerHTML = imgs.alt;
            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";



        }

        function showDateTime() {

            var selector = document.getElementById("dateTimeSelector").style.display = 'block';
            var selector = document.getElementById("dateTimeSelectorLabel").style.display = 'block';
        }
    </script>
    <style>
        .imgContainer {
            float: left;
        }

        #dateTimeSelector {
            display: none;
        }

        #dateTimeSelectorLabel {
            display: none;
        }

        #pageBanner {
                background-image: url(../assets/images/bg/page-banner.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                position: relative;
                z-index: 1;
                padding: 100px 0;
                margin-top: 91px;
            }
    </style>
</head>

<body>

    <div id="main-wrapper">

        <!-- Header -->
        <?php
        include_once('header.php');
        ?>

        <!--Page Banner Section start-->
        <div id="pageBanner" class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">View Property</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">View Property</li>
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
                                            <h2 class="title"><img src="../assets/images/icons/marker.png" alt=""> <?php echo $property[0]['address'] . " " . $property[0]['city'] . ", " . $property[0]['province'] ?></h2>
                                            <span class="location"><?php echo $property[0]['structure']; ?></span>
                                        </div>
                                        <div class="right">
                                            <div class="type-wrap">
                                                <span class="price">$<?php
                                                                        $price = strlen($property[0]['price']);
                                                                        $newPrice = null;

                                                                        switch (true) {
                                                                            case $price == 3:
                                                                                $newPrice = substr($property[0]['price'], 0, 3) . "<span>M</span>";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 4:
                                                                                $newPrice = substr($property[0]['price'], 0, 4) . "<span>M</span>";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 5:
                                                                                $newPrice = substr($property[0]['price'], 0, 2) . "K";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 6:
                                                                                $newPrice = substr($property[0]['price'], 0, 3) . "K";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 7:
                                                                                $million = substr($property[0]['price'], 0, 1) . ".";
                                                                                $hundreds = substr($property[0]['price'], 1, 2) . "M";
                                                                                $newPrice = $million . $hundreds;
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 8:
                                                                                $million = substr($property[0]['price'], 0, 2) . ".";
                                                                                $hundreds = substr($property[0]['price'], 2, 2) . "M";
                                                                                $newPrice = $million . $hundreds;
                                                                                echo $newPrice;
                                                                                break;
                                                                            default:
                                                                                echo "-";
                                                                                break;
                                                                        } ?></span>
                                                <span class="type"><?php
                                                                    if ($property[0]['property_type'] == "Sale") {
                                                                        echo "For Sale";
                                                                    } elseif ($property[0]['property_type'] == "Rent") {
                                                                        echo "For Rent";
                                                                    } else {
                                                                        echo "-";
                                                                    }
                                                                    ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Photo Gallery -->
                                    <div class="container pr-0 pl-0">
                                        <!-- Close the image -->
                                        <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->

                                        <!-- Expanded image -->
                                        <img class="mb-15 " id="expandedImg" style="width:100%" src="<?php echo $propertyPhotos[0]['photos']; ?>">

                                        <!-- Image text -->
                                        <div id="imgtext"></div>
                                    </div>

                                    <!-- Gallery Mini Images -->
                                    <div class="row">
                                        <div class="column">
                                            <?php for ($i = 0; $i < sizeof($propertyPhotos); $i++) { ?>
                                                <div class="imgContainer">
                                                    <img style="height: 120px; width: 180px; margin-left: 16px; margin-bottom: 16px;" src="<?php echo $propertyPhotos[$i]['photos']; ?>" alt="" onclick="expandPhoto(this);">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>


                                    <div class="content">

                                        <!-- Amenities -->
                                        <div class="row mt-30 mb-30">

                                            <!-- For Loop to Display Amenities -->
                                            <div class="col-md-7 col-12">
                                                <h3>Amenities</h3>
                                                <ul class="amenities-list">
                                                    <?php
                                                    $features = $property[0]['features'];
                                                    $featuresArrayFilter = explode(" ", $features, -1);
                                                    $featuresArrayVal = array_filter($featuresArrayFilter);
                                                    $featuresArray = array_values($featuresArrayVal);
                                                    for ($i = 0; $i < sizeof($featuresArray); $i++) {
                                                        echo "<li>" . $featuresArray[$i] . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- Visits and Messaging -->
                                        <div class="row mt-30 mb-30">

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--Property end-->

                            <!--Comment start-->
                            <!-- <div class="comment-wrap col-12">
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

                            </div> -->
                            <!--Comment end-->

                        </div>
                    </div>


                    <!-- Property Specifications -->
                    <div class="col-lg-4 col-12 order-2 order-lg-1 pr-30 pr-sm-15 pr-xs-15">

                        <!-- Property Options -->
                        <div class="">
                            <!-- Display Options Determined by level of User -->
                            <?php if ($_SESSION['level'] == 2 || $_SESSION['level'] == 3) { ?>
                                <h4 class="sidebar-title"><span class="text">Property Options</span><span class="shape"></span></h4>
                                <button class="btn btn-block mb-15">Edit Property</button>
                                <button class="btn btn-block mb-25">Delete Property</button>
                            <?php } else if ($_SESSION['level'] == 1) { ?>
                                <h4 class="sidebar-title"><span class="text">Property Options</span><span class="shape"></span></h4>

                                <!-- Visit Submit Form -->
                                <form action="../assets/php/requestvisit.php" method="POST">

                                    <!-- Validation Error Messages -->
                                    <?php
                                    if (isset($_GET['update'])) {
                                        if ($_GET['update'] == 'error' || $_GET['visitAlreadyRequested'] == 1) {
                                            echo "<div class='alert alert-danger' >";
                                            echo '<span class="align-middle">A Request Has Already Been Submitted<br></span>';
                                            echo "</div>";
                                        } else if ($_GET['update'] == 'success') {
                                            echo "<div class='alert alert-success' >";
                                            echo '<span class="align-middle">Request Submitted<br></span>';
                                            echo "</div>";
                                        }
                                    }
                                    ?>

                                    <h5 id="dateTimeSelectorLabel">Date and Time of Visit (Hour Intervals)</h5>

                                    <!-- Get the current time in order to determine Minimum visit time -->
                                    <?php
                                    // Set the default time zone
                                    date_default_timezone_set("America/Toronto");
                                    $minimumVisitDate = date("m-d-y h:i:00");

                                    //  Couldnt get the minimum Date to function here
                                    // $minimumVisitDateS = strval($minimumVisitDate);
                                    // $minimumVisitDateU = substr_replace("1", "T", $minimumVisitDateS);
                                    ?>

                                    <!-- Date Selector -->
                                    <input name="dateTimeSelector" id="dateTimeSelector" class="mb-15" type="datetime-local" step="3600" min="2020-10-09T13:00" required>

                                    <!-- Store property Id -->
                                    <?php
                                    $_SESSION['currentPropertyId'] = $_GET['propertyId'];
                                    ?>

                                    <!-- Request Visit Button -->
                                    <button name="visit-submit" onclick="showDateTime()" class="btn btn-block mb-15" type="submit">Request a Visit</button>
                                </form>
                                <button class="btn btn-block mb-25">Message Seller</button>
                            <?php } ?>

                            <h4 class="sidebar-title"><span class="text">Sepcifications</span><span class="shape"></span></h4>
                            <ul>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/areax.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Int: " . $property[0]['size_interior'] . " Sqft."; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/areax.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Ext: " . $property[0]['size_exterior'] . " Sqft."; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/bedroomsx.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Bedrooms: " . $property[0]['bedrooms_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/bathroom.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Bathrooms: " . $property[0]['bathroom_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/parkingx.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Parking: " . $property[0]['parking_space_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/structure.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Structure: " . $property[0]['structure']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/constructed.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Constructed On: " . $property[0]['constructed_date']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/exteriorfinish.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Finish: " . $property[0]['exterior_finish']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/floor.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Flooring: " . $property[0]['flooring_type']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/stories.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Stories: " . $property[0]['stories_total']; ?></span></div>
                                </li>
                            </ul>


                        </div>
                        <!-- Room Specifications -->
                        <div class="row mt-30 mb-30">

                            <!-- For Loop to Display Room Dimensions -->
                            <div class="col-12">
                                <h4 class="sidebar-title"><span class="text">Room Dimensions</span><span class="shape"></span></h4>

                                <?php for ($i = 0; $i < sizeof($rooms); $i++) { ?>

                                    <div class="imgContainer pr-50">
                                        <!-- <div class="image"><img src="../assets/images/icons/bedroomsx.png" alt="" width="1px" height="100px"></div> -->
                                        <?php echo "<h5><u>" . "Room " . ($i + 1) . "</u></h5>";
                                        echo "<b>" . $rooms[$i]['type'] . "</b>";
                                        // echo "<b>Dimensions (ft): </b>" . "<br>". $rooms[$i]['width'] . " x " . $rooms[$i]['length'] . "<br><br>";
                                        echo "<h4 class='mb-25'>" . $rooms[$i]['width'] . "' x " . $rooms[$i]['length'] . "'" . "</h4>";
                                        ?>
                                    </div>
                                <?php } ?>


                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--New property section end-->

        <?php
        include_once("footer.php");
        ?>
    </div>
    <script>

    </script>

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