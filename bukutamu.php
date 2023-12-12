<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 8px;
        }
        .btn-cancel {
            background-color: #ccc;
        }
    </style>
</head>
<body>

    <h2>Buku Tamu</h2>

    <?php
    function sanitize_input($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $pesan = $_POST["pesan"];

        $nama = sanitize_input($nama);
        $alamat = sanitize_input($alamat);
        $email = sanitize_input($email);
        $pesan = sanitize_input($pesan);

        $fileBukuTamu = "buku_tamu.txt";
        $dataTamu = "Nama: $nama\nAlamat: $alamat\nEmail: $email\nPesan: $pesan\n\n";

        $fileHandle = fopen($fileBukuTamu, "a");
        fwrite($fileHandle, $dataTamu);
        fclose($fileHandle);

        echo "<p>Pesan Anda telah terkirim. Terima kasih!</p>";
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <button type="submit">Kirim Pesan</button>
        <button type="button" class="btn-cancel" onclick="window.location.href='batal.html'">Batal</button>
    </form>

</body>
</html>