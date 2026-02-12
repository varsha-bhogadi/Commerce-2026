<?php
global $conn;
include "db.php";
$id = $_SESSION['user_id'];

$hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : "";

mysqli_query($conn, "UPDATE users SET 
name='$_POST[name]',
email='$_POST[email]',
gender='$_POST[gender]',
country='$_POST[country]',
hobbies='$hobbies',
about='$_POST[about]'
WHERE id=$id");

header("Location: dashboard.php");
