<?php
global $conn;
include "db.php";
$id = $_SESSION['user_id'];
$res = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($res);
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<form method="POST" action="update.php">
    Name: <input name="name" value="<?= $user['name'] ?>"><br>

    Email: <input name="email" value="<?= $user['email'] ?>"><br>

    Gender:
    <input type="radio" name="gender" value="Male" <?= $user['gender'] == "Male" ? "checked" : "" ?>>Male
    <input type="radio" name="gender" value="Female" <?= $user['gender'] == "Female" ? "checked" : "" ?>>Female<br>

    Country:
    <select name="country">
        <option <?= $user['country'] == "India" ? "selected" : "" ?>>India</option>
        <option <?= $user['country'] == "USA" ? "selected" : "" ?>>USA</option>
    </select><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading">Reading
    <input type="checkbox" name="hobbies[]" value="Music">Music<br>

    About:
    <textarea name="about"><?= $user['about'] ?></textarea><br>

    <button>Update</button>
</form>