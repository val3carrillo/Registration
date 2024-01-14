<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tutorial";

try {
    $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($con->connect_error) {
        throw new Exception("Failed to connect to the database: " . $con->connect_error);
    }
} catch (Exception $e) {
    die("Connection error: " . $e->getMessage());
}




?>