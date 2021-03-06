<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';
include_once 'functions.php';

// Instantiate
$propertyController = new PropertyController();
$PhotoController = new PhotoController();
$roomController = new RoomController();

// Basic Info
if (isset($_POST['propertyBasic-submit'])) {

    // Create Variables
    $propertyNumber = $_POST['propertyNumber'];
    $propertyStreet = $_POST['propertyStreet'];
    $propertyCity = $_POST['propertyCity'];
    $propertyProvince = $_POST['propertyProvince'];
    $propertyPostal = $_POST['propertyPostal'];
    $propertyType = $_POST['propertyType'];
    $propertyStructure = $_POST['propertyStructure'];
    $propertyPrice = $_POST['propertyPrice'];
    $propertyConstructedDate = $_POST['propertyConstructedDate'];
    $propertyAddress = null;


    // Store them in Sessions
    $_SESSION['propertyNumber'] = $propertyNumber;
    $_SESSION['propertyStreet'] = $propertyStreet;
    $_SESSION['propertyCity'] = $propertyCity;
    $_SESSION['propertyProvince'] = $propertyProvince;
    $_SESSION['propertyPostal'] = $propertyPostal;
    $_SESSION['propertyType'] = $propertyType;
    $_SESSION['propertyStructure'] = $propertyStructure;
    $_SESSION['propertyPrice'] = $propertyPrice;
    $_SESSION['propertyConstructedDate'] = $propertyConstructedDate;

    // Empty Check
    if (empty($propertyNumber) || empty($propertyStreet) || empty($propertyCity) || empty($propertyPostal) || empty($propertyPrice) || empty($propertyConstructedDate)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicEmptyFields&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Number Validation
    } else if (!preg_match("/^[0-9]+$/", $propertyNumber)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicNumber&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Street Validation
    } else if (!preg_match("/^[a-zA-Z]+$/", $propertyStreet)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicStreet&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property City Validation
    } else if (!preg_match("/^[a-zA-Z]+$/", $propertyCity)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicCity&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Postal Validation
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $propertyPostal)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicPostal&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Price Validation
    } else if (!preg_match("/^[0-9]+$/", $propertyPrice)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicPrice&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property String Length
    } else if (strlen($propertyNumber) > 5 || strlen($propertyStreet) > 25 || strlen($propertyStreet) < 3 || strlen($propertyCity) > 25 || strlen($propertyCity) < 3 || strlen($propertyPostal) > 6 || $propertyPrice < 100) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicCharlength&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
    } else {
        // Combine the Street Number and Street to create the Address Variable
        $propertyAddress = $propertyNumber  . " " . $propertyStreet;
        $_SESSION['propertyAddress'] = $propertyAddress;
        // Redirect to next tab
        Header("Location: ../../views/add-properties.php?update=propertyBasicSuccess");
    }
}

// Detailed Info
if (isset($_POST['propertyDetails-submit'])) {

    // Create Variables
    $propertyParking = $_POST['propertyParking'];
    $propertyBedrooms = $_POST['propertyBedrooms'];
    $propertyBathrooms = $_POST['propertyBathrooms'];
    $propertyBaths = $_POST['propertyBaths'];
    $propertyStories = $_POST['propertyStories'];
    $propertyExteriorFinish = $_POST['propertyExteriorFinish'];
    $propertyFlooringType = $_POST['propertyFlooringType'];
    $propertySizeExterior = $_POST['propertySizeExterior'];
    $propertySizeInterior = $_POST['propertySizeInterior'];
    $propertyAC = $_POST['propertyAC'];
    $propertyBalcony = $_POST['propertyBalcony'];
    $propertyLift = $_POST['propertyLift'];
    $propertyPool = $_POST['propertyPool'];
    $propertyJacuzzi = $_POST['propertyJacuzzi'];
    $propertySmart = $_POST['propertySmart'];
    $propertyTheatre = $_POST['propertyTheatre'];


    // Store Variables From Session
    $propertyNumber = $_SESSION['propertyNumber'];
    $propertyStreet = $_SESSION['propertyStreet'];
    $propertyCity = $_SESSION['propertyCity'];
    $propertyProvince = $_SESSION['propertyProvince'];
    $propertyPostal = $_SESSION['propertyPostal'];
    $propertyType = $_SESSION['propertyType'];
    $propertyStructure = $_SESSION['propertyStructure'];
    $propertyPrice = $_SESSION['propertyPrice'];
    $propertyConstructedDate =  $_SESSION['propertyConstructedDate'];
    $propertyAddress = $_SESSION['propertyAddress'];


    // Property Size Validation
    if (!preg_match("/^[0-9]+$/", $propertySizeExterior) || $propertySizeExterior < 100 || $propertySizeExterior > 100000 || !preg_match("/^[0-9]+$/", $propertySizeInterior) || $propertySizeInterior < 100 || $propertySizeInterior > 100000) {
        Header("Location: ../../views/add-properties.php?error=propertyDetailSize&propertySizeExterior=" . $propertySizeExterior . "&propertySizeInterior=" . $propertySizeInterior);
        exit();
    } else {
        // Create Features Variable
        $propertyFeaturesArray = array($propertyAC, $propertyBalcony, $propertyLift, $propertyPool, $propertyJacuzzi, $propertySmart, $propertyTheatre);

        $propertyFeatures = implode(" ", $propertyFeaturesArray) . " ";

        // Add Property
        $propertyController->createProperty($propertyFeatures, $propertyParking, $propertyPrice, $propertyType, null, $propertyStructure, $propertyBathrooms, $propertyBedrooms, null, $propertyConstructedDate, $propertyExteriorFinish, $propertyFlooringType, $propertyBaths, null, $propertyStories, $propertySizeExterior, $propertySizeInterior, $propertyAddress, $propertyCity, $propertyProvince, $propertyPostal, null, null, null, null, $_SESSION['id']);


        // Get Max Property ID
        $arrayMaxId = $propertyController->showPropertyByMaxId();
        $maxId = $arrayMaxId[0]['MAX(property_id)'];
        $_SESSION['maxId'] = $maxId;
        Header("Location: ../../views/add-properties.php?update=propertyDetailSuccess");
    }
}

// Gallery
if (isset($_POST['propertyGallery-submit'])) {

    // Timestamp
    $timestamp = time();

    // Validation
    if (isset($_FILES['file'])) {
        $file_array = reArrayFiles($_FILES['file']);
    
        // For Loop to fill errors array
        for ($i = 0; $i < count($file_array); $i++) {

            // Grab Extentension
            $fileExt = explode('.', $file_array[$i]['name']);
            $fileActualExt = strtolower(end($fileExt));

            // Allowed File Types
            $allowedFileTypes = array('jpeg', 'jpg', 'png', 'jfif');

            // PHP Error Validation
            if ($file_array[$i]['error']) {
                $_SESSION['errors-gallery'][$i] = $file_array[$i]['name'] . " - Internal System Error";
                // Extension Validation
            } else if (!in_array($fileActualExt, $allowedFileTypes)) {
                $_SESSION['errors-gallery'][$i] = $file_array[$i]['name'] . " - Extensions allowed: JPEG, JPG, JFIF, PNG";
                // Size Validation
            } else if ($file_array[$i]['size'] > 2000000) {
                $_SESSION['errors-gallery'][$i] = $file_array[$i]['name'] . " - Max Size: 2MB";
            }
        }

        // Verify if there are any errors, then add photos to DB
        if (count($_SESSION['errors-gallery']) > 0) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery");
            exit();
        } else {
            for ($i = 0; $i < count($file_array); $i++) {
                // Grab Extentension
                $fileExt = explode('.', $file_array[$i]['name']);
                $fileActualExt = strtolower(end($fileExt));

                // Allowed File Types
                $allowedFileTypes = array('jpeg', 'jpg', 'png', 'jfif');

                // Upload File to Folder
                $fileNewName = $timestamp . "." . $fileActualExt;
                $fileDestination = "../assets/images/uploads/" . $fileNewName;
                $fileDestinationMove = "../images/uploads/" . $fileNewName;
                move_uploaded_file($file_array[$i]['tmp_name'], $fileDestinationMove);

                // Get Max Property ID
                $arrayMaxId = $propertyController->showPropertyByMaxId();
                $maxId = $arrayMaxId[0]['MAX(property_id)'];
                $_SESSION['maxId'] = $maxId;

                // Upload to DB
                $PhotoController->createPhoto($_SESSION['maxId'], $i+1, null, $fileDestination);
                Header("Location: ../../views/add-properties.php?update=propertyGallerySuccess");
            }
        }
    }
}

// Room Specifications
if (isset($_POST['propertyRooms-submit'])) {

    // For loop to catch all possible BEDROOM POSTS & create each individual variable
    for ($i = 0; $i < 12; $i++) {
        if (isset($_POST['bedroomWidth' . $i])) {
            ${"bedroomWidth$i"} = $_POST['bedroomWidth' . $i];
            ${"bedroomLength$i"} = $_POST['bedroomLength' . $i];
            ${"bedroomLevel$i"} = $_POST['bedroomLevel' . $i];

            // Validation of each individual variable
            if (${"bedroomWidth$i"} > 50 || ${"bedroomWidth$i"} < 10) {
                Header("Location: ../../views/add-properties.php?update=propertyGalleryFinished&bedroomWidthError=" . $i);
                exit();
            } else if (${"bedroomLength$i"} > 50 || ${"bedroomLength$i"} < 10) {
                Header("Location: ../../views/add-properties.php?update=propertyGalleryFinished&bedroomLengthError=" . $i);
                exit();
            } else {
                // Add Room
                $roomController->createRoom($_SESSION['maxId'], "Bedroom",  ${"bedroomWidth$i"}, ${"bedroomLength$i"}, ${"bedroomLevel$i"}, null, null);
                echo "bedroom " . $i . " added<br>";

                // Redirect
                // Header("Location: ../../views/my-account.php?update=propertyAddedSuccessfully");
                // exit();
            }
        }
    }


    // For loop to catch all possible BATHROOM POSTS & create each individual variable
    for ($i = 0; $i < 12; $i++) {
        if (isset($_POST['bathroomWidth' . $i])) {
            ${"bathroomWidth$i"} = $_POST['bathroomWidth' . $i];
            ${"bathroomLength$i"} = $_POST['bathroomLength' . $i];
            ${"bathroomLevel$i"} = $_POST['bathroomLevel' . $i];

            // Validation of each individual variable
            if (${"bathroomWidth$i"} > 50 || ${"bathroomWidth$i"} < 10) {
                Header("Location: ../../views/add-properties.php?update=propertyGalleryFinished&bathroomWidthError=" . $i);
                exit();
            } else if (${"bathroomLength$i"} > 50 || ${"bathroomLength$i"} < 10) {
                Header("Location: ../../views/add-properties.php?update=propertyGalleryFinished&bathroomLengthError=" . $i);
                exit();
            } else {
                // Add Room
                $roomController->createRoom($_SESSION['maxId'], "Bathroom",  ${"bathroomWidth$i"}, ${"bathroomLength$i"}, ${"bathroomLevel$i"}, null, null);

                echo "bathroom " . $i . " added<br>";
            }
        }
    }

    // Redirect
    Header("Location: ../../views/my-account.php?update=propertyAddedSuccessfully");
    exit();
}
