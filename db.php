<?php
$host = "127.0.0.1";
$user = "varsha";
$pass = "@sRi186201";
$db   = "user_registrations";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
session_start();
?>
