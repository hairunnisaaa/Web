<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user(username, email, password) VALUES('{$username}', '{$email}','{$password}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:login.php?tambah=sukses');
    } else {
        header('location:login.php?tambah=gagal');
    }
} else {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="register">
            <h1>Register</h1>
            <form method="post" action="register.php">
                <div class="box-input">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="box-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="box-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-input">Register</button>
            </form>
            <p>
                <p>Sudah Punya Akun?
                    <a href="login.php">Login Disini</a>
                </p>
            </p>
        </div>
        <div class="right">
            <img src="bunga.jpeg" alt="bunga">
        </div>
    </div>
</body>
</html>
