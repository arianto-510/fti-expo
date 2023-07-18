<?php
include './header.php';
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/sempat1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Call of Paper</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Call of Paper <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
  <div class="container">
    <div class="row d-flex">
      <?php include './koneksi.php';
      $query = mysqli_query($conn, "SELECT * FROM paper");
      $p = mysqli_fetch_assoc($query);
      ?>
      <div class="col-md-5 wrap-about py-5 pr-md-4 ftco-animate">
        <h2 class="mb-4">Tanggal Penting</h2>
        <div>
          <h5>Batas Pengumpulan Makalah</h5>
          <p><?= $p['tgl_kumpul']; ?></p>
        </div>
        <div>
          <h5>Pengumuman Penerimaan Makalah</h5>
          <p><?= $p['tgl_pengumuman']; ?></p>
        </div>
        <div>
          <h5>Batas Pengumpulan Akhir Revisi</h5>
          <p><?= $p['tgl_revisi']; ?></p>
        </div>
        <div>
          <h5>Pelaksanaan Seminar</h5>
          <p><?= $p['tgl_kegiatan']; ?></p>
        </div>
        <div>
          <h2 class="mt-4">Link Penting</h2>
          <a class="btn btn-primary my-2" href="<?= $p['register']; ?>">Registrasi Peserta Dengar</a>
          <a class="btn btn-primary my-2" href="<?= $p['register']; ?>">Registrasi Makalah</a>
          <a class="btn btn-primary my-2" href="<?= $p['submit']; ?>" target="_blank">Submit Publikasi</a>
          <a href="<?= $p['template']; ?>" target="_blank" class="btn btn-primary my-2">Download Template Publikasi</a>
          <a href="<?= $p['background']; ?>" target="_blank" class="btn btn-primary my-2">Virtual Background</a>
        </div>
        <h2>Alur Pendaftaran</h2>
        <div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Pendaftaran</h4>
            <p>Peserta melakukan proses pendaftaran pada link berikut :</p>
            <a href="<?= $p['register']; ?>" class="btn btn-primary">Daftar</a>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Penulisan</h4>
            <p>Sesuaikan penulisan anda dengan template yang sudah disediakan</p>
            <a href="<?= $p['template']; ?>" target="_blank" class="btn btn-primary">Template</a>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Kirim Full Paper</h4>
            <p>Kirim Full Paper ke link tersedia </p>
            <a href="<?= $p['submit']; ?>" target="_blank" class="btn btn-primary">Submit Paper</a>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Bayar & Konfirmasi</h4>
            <p>Pembayaran dilakukan melalui Rek BRI : </p>
            <div class="btn btn-primary"><b>0604010597508</b> a.n Suharsono Bantun</div>
            <hr>
            <p>Konfirmasi pembayaran :</p>
            <a href="https://forms.gle/bHBZr3Bx6Qp9yYue6" target="_blank" class="btn btn-primary">Konfirmasi Pembayaran</a>
            <hr>
            <p>Gabung Grup WhatsApp</p>
            <a href="https://chat.whatsapp.com/GVJp9Ke5FLs2t1hb3cUf7F" target="_blank" class="btn btn-primary">Gabung Grup</a>
          </div>
        </div>
      </div>
      <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
        <div>
          <h2 class="mb-4">Call For Paper</h2>
          <p align="justify"><?= $p['tentang']; ?></p>
          <h2>Bidang Kajian</h2>
          <div class="alert alert-warning">1. Informatika, Ilmu Komputer dan Elektronika</div>
          <div class="alert alert-warning">2. Keguruan dan Ilmu Pendidikan</div>
          <div class="alert alert-warning">3. Matematika, Kimia, Linkungan, Kelautan, Perikanan, Pertanian dan Pangan</div>
          <div class="alert alert-warning">5. Farmasi dan Ilmu Kesehatan</div>
          <div class="alert alert-warning">6. Pertambangan, Sipil dan Arsitektur</div>
          <div class="alert alert-warning">7. Energi, Material Teknik dan Perancangan</div>
          <div class="alert alert-warning">8. Manufaktur dan Teknik Industri, Teknik Mesin dan Teknik Perkapalan</div>
          <div class="alert alert-warning">9. Manajemen, Akuntasi, Administrasi Publik, Ekonomi dan Hukum</div>
        </div>
        <div>
          <img src="./admin/gambar/<?= $p['gambar']; ?>" class="col-md-12">
        </div>
      </div>
    </div>
    <div class="row" id="regis">
      <h2 class="text-center"><b>Form Registrasi Seminar</b></h2>
      <div class="col-md-12">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdzsqe4w86Nvwg2NIjslEGih-DhSQXZrgvFnynfV8zqrXv69g/viewform?embedded=true" width="100%" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4">Host & Co-Host</h2>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <?php $result = mysqli_query($conn, "SELECT * FROM host");
      while ($h = mysqli_fetch_assoc($result)) : ?>
        <div class="col-md-3">
          <div class="card mt-2" style="border: 0;">
            <div class="text-center">
              <p class="mt-2"><?= $h['jenis']; ?></p>
              <img src="./admin/gambar/<?= $h['gambar']; ?>" width="60px">
              <h6 class="card-title mt-2 mx-2"><?= $h['nama']; ?></h6>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


<?php
include './footer.php';

?>