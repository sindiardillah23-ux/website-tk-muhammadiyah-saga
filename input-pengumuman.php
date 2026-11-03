<?php
include "../Config/koneksi.php";

$pesan = "";

if (isset($_POST['simpan'])) {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO pengumuman (judul, isi, tanggal)
              VALUES ('$judul', '$isi', '$tanggal')";

    if (mysqli_query($koneksi, $query)) {
        $pesan = "Pengumuman berhasil disimpan!";
    } else {
        $pesan = "Gagal menyimpan pengumuman.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pengumuman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f5fa;
            padding: 30px;
        }

        .form-container {
            max-width: 550px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
        }

        h2 {
            color: #315b80;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            box-sizing: border-box;
            border: 1px solid #ccd8e5;
            border-radius: 8px;
        }

        button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #80b9df;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Input Pengumuman Sekolah</h2>

    <p><?php echo htmlspecialchars($pesan); ?></p>

    <form method="POST">
        <label>Judul Pengumuman</label>
        <input type="text" name="judul" required>

        <label>Isi Pengumuman</label>
        <textarea name="isi" rows="5" required></textarea>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <button type="submit" name="simpan">
            Simpan Pengumuman
        </button>
    </form>
</div>

</body>
</html>