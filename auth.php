<?php
global $conn;
include "db.php";
//session does not exist  but cookie exists(user closed browser but choose remember me
if(!isset($_SESSION['user_id'])&&isset($_COOKIE['remember_token'])){
    $token = $_COOKIE['remember_token'];
    $res=mysqli_query($conn,"SELECT id FROM users WHERE remember_token='$token'");
    if($row=mysqli_fetch_assoc($res)){
        $_SESSION['user_id'] = $row['id'];
    }
}