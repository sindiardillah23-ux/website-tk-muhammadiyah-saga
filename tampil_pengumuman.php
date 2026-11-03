<?php
require_once __DIR__ . '/Config/koneksi.php';

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM pengumuman ORDER BY tanggal DESC"
);

if (!$query) {
    die("Gagal mengambil data: " . mysqli_error($koneksi));
}
?>

<h2>Informasi dan Pengumuman Sekolah</h2>

<?php while ($data = mysqli_fetch_assoc($query)) : ?>
    <div class="pengumuman">
        <h3><?= htmlspecialchars($data['judul']); ?></h3>
        <p><?= nl2br(htmlspecialchars($data['isi'])); ?></p>
        <small>
            <?= date('d-m-Y H:i', strtotime($data['tanggal'])); ?>
        </small>
    </div>
<?php endwhile; ?>