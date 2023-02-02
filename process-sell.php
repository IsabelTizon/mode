<?php

// session_start();

include("includes/active_session.php");
include("includes/dbconx.php"); //Database conexion
include("includes/error-reporting.php");


//Validating title
if (empty($_GET["title"])) {
    die("name is required");
}

//Validating Description
if (strlen($_GET["descript"]) > 300) { // strlen: string length function
    die("Description must be less than 300 characters");
}

//Validating category
if (empty($_GET["category"])) {
    // die("category is required");
    $category_error = "Please select a category";
} else {
    $category = $_GET["category"];
}

//Validating brand

if (empty($_GET["brand"])) {
    die("brand is required");
}


//Validating condition
if (strlen($_GET["condition1"]) > 150) { // strlen: string length function
    die("Condition's description must be less than 150 characters");
}

//Validating size
if (empty($_GET["size"])) {
    // die("category is required");
    $category_error = "Please select a size";
} else {
    $category = $_GET["size"];
}


//Validating price
if (empty($_GET["price"])) {
    die("price is required");
}

//Picture
if (isset($_GET['submit'])) {
    $file = $_FILES['file'];

    // print_r($file);
    // print_r($_GET);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName); // file name = .jpg, etc
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                // $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                // $fileDestination = 'media/items/photos/' . $fileNameNew;
                // move_uploaded_file($fileTmpName, $fileDestination);
                // header("Location: index.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was and error uploading your files!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

//inserting input in the database

$sql = "INSERT INTO itemsMode (user_ID, itemPic, title, descript, category, brand, condition1, size, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("issssssss", $_GET["user"], $_GET["file"], $_GET["title"], $_GET["descript"], $_GET["category"], $_GET["brand"], $_GET["condition1"], $_GET["size"], $_GET["price"]);


if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    if ($conn->error) {
        die("email is already taken");
    } else {
        die("SQL error: " . $conn->error);
    }
}
