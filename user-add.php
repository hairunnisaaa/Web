<?php
require_once('required/database.php');

$message = '';
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO `user` (`username`, `email`, `password`) VALUES (?, ?, ?)';
    $statement = $connectDb->prepare($sql);

    $statement->bind_param('sss', $username, $email, $password);

    if ($statement->execute()) {
        $message = 'Data berhasil ditambahkan!';
    } else {
        $message = 'Data gagal ditambahkan: ' . $statement->error;
    }
    
    // Close the statement
    $statement->close();
}

require 'header.php';
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Tambah User</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <form method="post"> <!-- Replace "your_php_file.php" with the correct file name -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <!-- Fix the attribute name to "name" -->
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                <div class="form-group">
                    <a href="user.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
