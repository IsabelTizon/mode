<?php
$is_invalid = false;

// Validating the active session selecting the email
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("includes/dbconx.php"); // including database conexion
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $conn->real_escape_string($_POST['email']));

    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    // var_dump($user);//validating

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            // die("Login successful");
            session_start();
            session_regenerate_id();

            $_SESSION["user_id"] = $user["user_ID"];
            // If your credentials math go to logged home page
            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
}

//Validating the user_id
if (isset(($_SESSION)['user_id'])) {
    $sql = "SELECT * FROM users WHERE user_ID = {$_SESSION["user_id"]}";

    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

//Validating the order_id
if (isset(($_SESSION)['order'])) {
    $sql = "SELECT * FROM itemsMode WHERE order_ID = {$_SESSION["order"]}";

    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
