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
          <h2 class="mt-4">Submit Paper</h2>
          <a class="btn btn-primary my-2" href="https://seminar.popakos.com/">Submit Publikasi</a>
          <a class="btn btn-primary my-2" href="#">Submit Abdimas</a>
        </div>

        <div>
          <h2 class="mt-4">Template</h2>
          <a href="#" class="btn btn-primary my-2">Download Template Publikasi</a>
          <a href="#" class="btn btn-primary my-2">Download Template Abdimas</a>
        </div>

      </div>
      <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
        <h2 class="mb-4">Call Of Paper</h2>
        <p align="justify"><?= $p['tentang']; ?></p>
      </div>
    </div>
  </div>
</section>


<?php
include './footer.php';

?>