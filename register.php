<?php
global $conn;
include "db.php";

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        $error = "Email already exists!";
    } else {
        mysqli_query($conn, "INSERT INTO users(name,email,password)
                             VALUES('$name','$email','$pass')");
//        header("Location: login.php");
        $user_id = mysqli_insert_id($conn);
        $_SESSION['user_id'] = $user_id;
        header('location: dashboard.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        Name:
        <input type="text" name="name" required>

        Email:
        <input type="email" name="email" required>

        Password:
        <input type="password" name="password" required>

        <button name="register">Register</button>
    </form>

    <p style="text-align:center;margin-top:10px;">
        Already have an account?
        <a href="login.php">Login</a>
    </p>
</div>

</body>
</html>