<?php
global $conn;
include "db.php";
include "auth.php";

// Auto Login using Cookie
if (isset($_SESSION['user_id'])) {
    header('location: dashboard.php');
    exit;
}


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if ($user && password_verify($pass, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];


        if (isset($_POST['remember'])) {

            $token = bin2hex(random_bytes(32));

            mysqli_query($conn, "UPDATE users SET remember_token='$token' WHERE id=" . $user['id']);

            setcookie("remember_token", $token, [
                    'expires' => time() + 604800,
                    'path' => '/',
                    'httponly' => true,
                    'samesite' => 'Strict'
            ]);
        }

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        Email:
        <input type="email" name="email" required>

        Password:
        <input type="password" name="password" required>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>

        <button name="login">Login</button>
    </form>

    <p style="text-align:center;margin-top:10px;">
        Don't have an account?
        <a href="register.php">Register</a>
    </p>
</div>

</body>
</html>
