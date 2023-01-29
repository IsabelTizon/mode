<?php
$is_invalid = false;
//
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("includes/dbconx.php");
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $conn->real_escape_string($_POST['email']));


    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    // var_dump($user);//validating

    // 
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            // die("Login successful");
            session_start();

            $_SESSION["user_id"] = $user["user_ID"];

            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
}
