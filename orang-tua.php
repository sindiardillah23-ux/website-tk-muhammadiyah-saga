Penulisan
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi untuk Orang Tua | TK Muhammadiyah Saga</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background: #ffffff;
      color: #344054;
      line-height: 1.7;
    }

    a {
      text-decoration: none;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* HEADER */
    header {
      background: #ffffff;
      box-shadow: 0 3px 15px rgba(40, 80, 120, 0.08);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 25px;
      padding: 17px 0;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #244c70;
      font-size: 17px;
      font-weight: bold;
    }

    .brand-icon {
      width: 45px;
      height: 45px;
      display: grid;
      place-items: center;
      border-radius: 14px;
      background: #e4f1ff;
      font-size: 23px;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    nav a {
      color: #536273;
      font-size: 14px;
      font-weight: 600;
      transition: 0.2s;
    }

    nav a:hover,
    nav a.active {
      color: #d77da5;
    }

    /* BAGIAN ATAS */
    .parent-hero {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 45px;
      padding: 50px;
      margin: 35px auto 65px;
      background: linear-gradient(135deg, #f1f8ff, #fff5f9);
      border-radius: 25px;
    }

    .subtitle {
      display: inline-block;
      color: #c76592;
      background: #ffe8f1;
      padding: 7px 15px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: bold;
    }

    .parent-text h1 {
      color: #244c70;
      font-size: 40px;
      line-height: 1.25;
      margin: 20px 0;
    }

    .parent-text p {
      color: #637184;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .main-button {
      display: inline-block;
      background: #d985ad;
      color: #ffffff;
      padding: 12px 23px;
      border-radius: 12px;
      font-weight: bold;
      transition: 0.25s;
    }

    .main-button:hover {
      background: #c76f99;
      transform: translateY(-2px);
    }

    .parent-image img {
      display: block;
      width: 100%;
      height: 350px;
      object-fit: cover;
      border-radius: 22px;
      box-shadow: 0 15px 35px rgba(36, 76, 112, 0.15);
    }

    /* JUDUL BAGIAN */
    .section-heading {
      text-align: center;
      margin-bottom: 35px;
    }

    .section-heading span {
      color: #d77da5;
      font-size: 13px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .section-heading h2 {
      color: #244c70;
      font-size: 30px;
      margin-top: 5px;
    }

    .section-heading p {
      color: #718096;
      margin-top: 8px;
    }

    /* KARTU INFORMASI */
    .information-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      margin-bottom: 70px;
    }

    .info-card {
      background: #ffffff;
      border: 1px solid #e7eef6;
      border-left: 5px solid #d985ad;
      border-radius: 18px;
      padding: 25px;
      box-shadow: 0 7px 24px rgba(36, 76, 112, 0.06);
      transition: 0.25s;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(36, 76, 112, 0.12);
    }

    .info-icon {
      width: 55px;
      height: 55px;
      display: grid;
      place-items: center;
      background: #e5f2ff;
      border-radius: 16px;
      font-size: 25px;
      margin-bottom: 18px;
    }

    .info-card:nth-child(2) .info-icon {
      background: #ffe8f1;
    }

    .info-card:nth-child(3) .info-icon {
      background: #e7f7f1;
    }

    .info-card h3 {
      color: #244c70;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .info-card p {
      color: #718096;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .read-button {
      display: inline-block;
      color: #c76592;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
    }

    .read-button:hover {
      color: #244c70;
    }

    .info-detail {
      display: none;
      border-top: 1px solid #e7eef6;
      padding-top: 15px;
      margin-top: 15px;
      color: #536273;
      font-size: 14px;
    }

    .info-detail.show {
      display: block;
    }/* KARTU PENGUMUMAN DINAMIS */
.announcement-card {
  background: #ffffff;
  border: 1px solid #e7eef6;
  border-left: 5px solid #d985ad;
  border-radius: 16px;
  padding: 24px;
  margin-bottom: 18px;
  box-shadow: 0 7px 24px rgba(36, 76, 112, 0.06);
  transition: 0.25s;
}

.announcement-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 28px rgba(36, 76, 112, 0.12);
}

.announcement-card h3 {
  color: #244c70;
  font-size: 19px;
  margin-bottom: 10px;
}

.announcement-card p {
  color: #718096;
  font-size: 14px;
  margin-bottom: 12px;
}

.announcement-date {
  display: inline-block;
  color: #c76592;
  background: #fff0f6;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 12px;
}

    /* PENGINGAT */
    .reminder-section {
      background: #f2f8ff;
      padding: 50px 0;
      margin-bottom: 65px;
    }

    .reminder-box {
      max-width: 850px;
      margin: auto;
      background: #ffffff;
      border: 1px solid #e5edf7;
      border-radius: 20px;
      padding: 30px;
    }

    .reminder-box h3 {
      color: #244c70;
      font-size: 22px;
      margin-bottom: 15px;
    }

    .reminder-box p {
      color: #718096;
      margin-bottom: 12px;
    }

    .reminder-list {
      list-style: none;
      display: grid;
      gap: 12px;
      margin-top: 18px;
    }

    .reminder-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: #536273;
      font-size: 14px;
    }

    .check {
      color: #c76592;
      font-weight: bold;
    }

    /* PENUTUP */
    .closing {
      text-align: center;
      background: #fff3f8;
      padding: 35px 25px;
      border-radius: 20px;
      margin-bottom: 65px;
    }

    .closing h2 {
      color: #244c70;
      margin-bottom: 10px;
    }

    .closing p {
      color: #718096;
      margin-bottom: 20px;
    }

    /* FOOTER */
    footer {
      background: #244c70;
      color: #ffffff;
      padding: 30px 0;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    footer h3 {
      font-size: 17px;
      margin-bottom: 5px;
    }

    footer p {
      color: #d9e8f7;
      font-size: 13px;
    }

    .footer-links {
      display: flex;
      gap: 18px;
      flex-wrap: wrap;
    }

    .footer-links a {
      color: #ffffff;
      font-size: 13px;
    }

    /* TAMPILAN HP */
    @media (max-width: 900px) {
      .navbar {
        flex-direction: column;
      }

      nav {
        justify-content: center;
        gap: 13px;
      }

      .parent-hero {
        padding: 30px;
        gap: 25px;
      }

      .parent-text h1 {
        font-size: 33px;
      }

      .information-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .container {
        width: 92%;
      }

      .parent-hero {
        grid-template-columns: 1fr;
        padding: 25px;
        margin-top: 22px;
      }

      .parent-text h1 {
        font-size: 31px;
      }

      .parent-image img {
        height: 250px;
      }

      .information-grid {
        grid-template-columns: 1fr;
      }

      .section-heading h2 {
        font-size: 25px;
      }

      .footer-content {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>

<body>

  <?php include __DIR__."/Components/header.php"; ?>

  <main class="container">

    <!-- BAGIAN ATAS -->
    <section class="parent-hero">
      <div class="parent-text">
        <span class="subtitle">Informasi Sekolah</span>

        <h1>Informasi untuk Orang Tua</h1>

        <p>
          Temukan informasi kegiatan sekolah, jadwal aktivitas anak,
          dan hal-hal penting yang perlu diketahui orang tua
          mengenai kegiatan di TK Muhammadiyah Saga.
        </p>

        <a href="#informasi" class="main-button">
          Lihat Informasi ↓
        </a>
      </div>

      <div class="parent-image">
  <img
    src="../Assets/Images/images/foto-orang-tua.jpeg"
    alt="Dokumentasi sekolah TK Muhammadiyah Saga"
  >
</div>
    </section>

    <!-- KARTU INFORMASI -->
    <section id="informasi">
      <div class="section-heading">
        <span>Pusat Informasi</span>
        <h2>Informasi Penting Sekolah</h2>
        <p>
          Informasi untuk membantu orang tua mengikuti kegiatan anak di sekolah.
        </p>
      </div>

      <div class="information-grid">

        <article class="info-card">
          <div class="info-icon">📢</div>
          <h3>Informasi Kegiatan Sekolah</h3>
          <p>
            Informasi mengenai kegiatan dan aktivitas yang
            diselenggarakan oleh sekolah.
          </p>

          <a href="#detail-kegiatan" class="read-button"
             onclick="toggleDetail(event, 'detail-kegiatan', this)">
            Baca Informasi +
          </a>

          <div class="info-detail" id="detail-kegiatan">
            Informasi kegiatan sekolah dapat disampaikan melalui
            pengumuman resmi dari pihak sekolah. Silakan periksa
            informasi yang diberikan oleh guru atau sekolah.
          </div>
        </article>

        <article class="announcement-card">
          <div class="info-icon">🗓️</div>
          <h3>Jadwal dan Kegiatan Anak</h3>
          <p>
            Kenali gambaran aktivitas harian anak selama
            mengikuti pembelajaran di sekolah.
          </p>

          <a href="#detail-jadwal" class="read-button"
             onclick="toggleDetail(event, 'detail-jadwal', this)">
            Baca Informasi +
          </a>

          <div class="info-detail" id="detail-jadwal">
            Kegiatan sekolah meliputi penyambutan, berbaris,
            berdoa, belajar, mengaji, istirahat, bermain,
            dan persiapan pulang. Sekolah melaksanakan kegiatan
            pada hari Senin sampai Jumat.
          </div>
        </article>

        <article class="info-card">
          <div class="info-icon">👨‍👩‍👧</div>
          <h3>Informasi untuk Orang Tua</h3>
          <p>
            Hal-hal yang dapat diperhatikan orang tua untuk
            mendukung kegiatan belajar anak.
          </p>

          <a href="#detail-orang-tua" class="read-button"
             onclick="toggleDetail(event, 'detail-orang-tua', this)">
            Baca Informasi +
          </a>

          <div class="info-detail" id="detail-orang-tua">
            Orang tua dapat membantu anak mempersiapkan diri
            sebelum berangkat sekolah, menjaga kebiasaan baik,
            serta mengikuti arahan dan informasi dari guru.
          </div>
        </article>

      </div>
    </section>

    <!-- PENGUMUMAN DINAMIS DARI DATABASE -->
    <section class="reminder-section">
      <div class="container">
        <div class="section-heading">
          <span>Informasi Terbaru</span>
          <h2>Pengumuman Sekolah</h2>
          <p>Informasi terbaru dari TK Muhammadiyah Saga.</p>
        </div>

        <div class="reminder-box">
          <?php
          require_once __DIR__ . '/../Config/koneksi.php';

          $queryPengumuman = mysqli_query(
              $koneksi,
              "SELECT * FROM pengumuman ORDER BY tanggal DESC"
          );

          if (!$queryPengumuman) {
              echo "<p>Pengumuman belum dapat ditampilkan.</p>";
          } elseif (mysqli_num_rows($queryPengumuman) > 0) {
              while ($data = mysqli_fetch_assoc($queryPengumuman)) {
          ?>
                <article class="info-card" style="margin-bottom: 18px;">
                  <h3><?= htmlspecialchars($data['judul']); ?></h3>
                  <p><?= nl2br(htmlspecialchars($data['isi'])); ?></p>
                  <span class="announcement-date">
    <?= date('d-m-Y H:i', strtotime($data['tanggal'])); ?>
</span>
                </article>
          <?php
              }
          } else {
              echo "<p>Belum ada pengumuman sekolah.</p>";
          }
          ?>
        </div>
      </div>
    </section>

  </main>

  <!-- PENGINGAT UNTUK ORANG TUA -->
  <section class="reminder-section">
    <div class="container">
      <div class="section-heading">
        <span>Kerja Sama Sekolah dan Keluarga</span>
        <h2>Dukungan untuk Anak</h2>
        <p>
          Dukungan sederhana dari rumah dapat membantu anak
          menjalani kegiatan sekolah dengan lebih baik.
        </p>
      </div>

      <div class="reminder-box">
        <h3>Hal yang Dapat Dilakukan Orang Tua</h3>

        <p>
          Orang tua dapat mendukung proses belajar anak melalui
          kebiasaan sehari-hari dan komunikasi dengan pihak sekolah.
        </p>

        <ul class="reminder-list">
          <li>
            <span class="check">✓</span>
            <span>Membantu anak bersiap sebelum berangkat sekolah.</span>
          </li>

          <li>
            <span class="check">✓</span>
            <span>Membiasakan anak berdoa dan menjaga kebersihan diri.</span>
          </li>

          <li>
            <span class="check">✓</span>
            <span>Mendampingi anak mengulang kegiatan belajar di rumah.</span>
          </li>

          <li>
            <span class="check">✓</span>
            <span>Memperhatikan pengumuman dan informasi dari sekolah.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- PENUTUP -->
  <div class="container">
    <section class="closing">
      <h2>Bersama Mendukung Tumbuh Kembang Anak</h2>
      <p>
        Kerja sama antara sekolah dan orang tua merupakan bagian
        penting dalam mendukung pengalaman belajar anak.
      </p>

      <a href="pembelajaran.html" class="main-button">
        Lihat Informasi Pembelajaran
      </a>
    </section>
  </div>

  <?php include __DIR__ ."/Components/footer.php"; ?>

  <script>
    function toggleDetail(event, detailId, button) {
      event.preventDefault();

      const detail = document.getElementById(detailId);
      const isOpen = detail.classList.toggle("show");

      button.textContent = isOpen
        ? "Tutup Informasi −"
        : "Baca Informasi +";
    }
  </script>

</body>
</html>