<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbase = "mode";

//conecting with the database mySQL

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // for error reporting
try {
    $conn = new mysqli($servername, $username, $password, $dbase);
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Error connecting to the database'); // If the conexion failt a message will be display
}
