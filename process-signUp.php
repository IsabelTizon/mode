<?php
include("includes/dbconx.php");
include("includes/error-reporting.php");



//Validating the user name
if (empty($_POST["username"])) {
    die("name is required");
}

//Validating the email
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

//Validating the password
if (strlen($_POST["password"]) < 6) { // strlen: string length function
    die("Password must be at least 6 characters");
}

//Validating if the password has letters
if (!preg_match(("/[a-z]/i"), $_POST["password"])) {
    die("Password must contain at least one letter");
}

//Validating if the password has numbers
if (!preg_match(("/[0-9]/i"), $_POST["password"])) {
    die("Password must contain at least one number");
}

//Validating if both password inputs are the same
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Password must much");
}

//installing the password as a hash that mean that a new pasword is created using an algorithm to be more secure
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
//Validating if checkbox is checked 
// isset($_POST['checkbox-age']);

if (!filter_has_var(INPUT_POST, 'checkbox_age')) {
    die("checkbox is required");
}

// print_r($_POST); //printing the  validation ej:Array ( [username] => Alvaro [email] => alvaro@gmail.com [password] => alvaro35 [password_confirmation] => alvaro35 [checkbox_age] => yes )
// var_dump($password_hash);  //printing the  validation ej: Array ( [username] => Alvarom [email] => alvaro@gmail.com [password] => alvaro35 [password_confirmation] => alvaro35 [checkbox_age] => yes ) string(60) "$2y$10$RXLP8M57ExZCBCeI03ahg.1NesowrCNsB.7a9xWVhIBaiw8CLywae"



//inserting input in the database
$sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("sss", $_POST["username"], $_POST["email"], $password_hash);


if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    if ($conn->error) {
        die("email is already taken");
    } else {
        die("SQL error: " . $conn->error);
    }
}
