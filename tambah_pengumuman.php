<?php
require_once __DIR__ . '/Config/koneksi.php';

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = trim($_POST["judul"]);
    $isi = trim($_POST["isi"]);

    if ($judul != "" && $isi != "") {
        $stmt = mysqli_prepare(
            $koneksi,
            "INSERT INTO pengumuman (judul, isi) VALUES (?, ?)"
        );

        mysqli_stmt_bind_param($stmt, "ss", $judul, $isi);

        if (mysqli_stmt_execute($stmt)) {
            $pesan = "Pengumuman berhasil disimpan!";
        } else {
            $pesan = "Pengumuman gagal disimpan.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $pesan = "Judul dan isi pengumuman harus diisi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengumuman</title>
</head>
<body>

    <h2>Tambah Pengumuman Sekolah</h2>

    <p><?= htmlspecialchars($pesan); ?></p>

    <form method="POST">
        <label>Judul Pengumuman</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Isi Pengumuman</label><br>
        <textarea name="isi" rows="5" required></textarea><br><br>

        <button type="submit">Simpan Pengumuman</button>
    </form>

    <br>
    <a href="tampil_pengumuman.php">Lihat Daftar Pengumuman</a>

</body>
</html>