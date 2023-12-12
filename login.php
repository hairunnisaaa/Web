<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

if (checkLogin()) {
    header('location:index.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION['is_login'] = true;
        $_SESSION['user'] = $data;
        header('location:header.php?status=sukses');
        exit;
    } else {
        header('location:login.php?status=gagal');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form method="post" action="login.php">
                <div class="box-input">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="box-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn-input">Login</button>
            </form>
            <p>
                Belum Punya Akun?
                <a href="register.php">Registrasi Disini</a>
            </p>
        </div>
        <div class="right">
            <img src="bunga.jpeg" alt="bunga">
        </div>
    </div>
</body>
</html>
