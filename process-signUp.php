<?php


//Validating the user name
if (empty($_POST["username"])) {
    die("name is required");
}

//Validating the email
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

//Validating the password
if (strlen($_POST["password"]) <= 6) { // strlen: string length
    die("Password must be 6 characters");
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
if ($_POST["password"] !== $_POST["password-confirmation"]) {
    die("Password must much");
}

//Validating if checkbox is checked 
isset($_POST['checkbox-age']);

if (filter_has_var(INPUT_POST, 'checkbox-age')) {
    die("checkbox is required");
}

//installing the password as a hash that mean that a new pasword is created using an algorithm to be more secure
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);




include("includes/dbconx.php");
include("includes/error-reporting.php");


$sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("sss", $_POST["username"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    header("Location: login.php");
} else {
    if ($conn->error === 1062) {
        die("email is already taken");
    } else {
        die("SQL error: " . $conn->error);
    }
}
