<?php
global $conn;
include "db.php";
include "auth.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}


$id = $_SESSION['user_id'];

$res = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container profile">
    <h2>Dashboard</h2>

    <p><strong>Name:</strong> <?= $user['name'] ?></p>
    <p><strong>Email:</strong> <?= $user['email'] ?></p>
    <p><strong>Gender:</strong> <?= $user['gender'] ?></p>
    <p><strong>Country:</strong> <?= $user['country'] ?></p>
    <p><strong>Hobbies:</strong> <?= $user['hobbies'] ?></p>
    <p><strong>About:</strong> <?= $user['about'] ?></p>

    <br>
    <a href="edit.php">Edit Profile</a> |
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
