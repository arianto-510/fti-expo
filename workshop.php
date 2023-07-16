<?php
include './header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/sempat1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Workshop</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Workshop <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Workshop</h2>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, praesentium consequatur quo voluptates totam sit aliquam ducimus veniam asperiores hic voluptatibus officiis laborum maiores! Quo architecto rem et minima facere.</p>
        <img src="./admin/gambar/paper.jpg" class="col-md-12 my-4">
      </div>
      <div class="col-md-6">
        <h2>Alur Pendaftaran</h2>
        <div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Pendaftaran</h4>
            <p>Peserta melakukan proses pendaftaran pada link berikut :</p>
            <a href="https://bit.ly/FREE_WORKSHOP_ITEXPO" target="_blank" class="btn btn-primary">Daftar</a>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Memilih Workshop</h4>
            <p>Memilih workshop, mohon untuk memilih workshop yang akan diikuti, setiap peserta boleh memilih lebih dari satu workshop</p>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Commitment Fee</h4>
            <p>Pembayaran bisa dilakukan melalui rekening BRI</p>
            <div class="btn btn-primary"><b>7134 0102 1598 539</b> a.n Enovita Prihatin</div>
          </div>
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Konfirmasi</h4>
            <p>Konfirmasi Commitment Fee :</p>
            <a href="https://bit.ly/CONFIRM_FREEWORKSHOP" target="_blank" class="btn btn-primary">Konfirmasi</a>
            <hr>
            <p>Gabung Grup WhatsApp</p>
            <a href="https://chat.whatsapp.com/GglvgSZSTo8Lg0XhLLGSH7" target="_blank" class="btn btn-primary">Gabung Grup</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      include './koneksi.php';
      $query = mysqli_query($conn, "SELECT * FROM workshop");
      while ($w = mysqli_fetch_assoc($query)) :
      ?>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/<?= $w['gambar']; ?>');">
              <div class="meta-date text-center p-2">
                <?php $tgl = $w['tanggal'];
                $d = explode("-", $tgl);
                ?>
                <span class="day"><?= $d[2]; ?></span>
                <?php if ($d[1]) {
                  if ($d[1] == '01') {
                    $d[1] = "Januari";
                  } elseif ($d[1] == '02') {
                    $d[1] = "Februari";
                  } elseif ($d[1] == '03') {
                    $d[1] = "Maret";
                  } elseif ($d[1] == '04') {
                    $d[1] = "April";
                  } elseif ($d[1] == '05') {
                    $d[1] = "Mei";
                  } elseif ($d[1] == '06') {
                    $d[1] = "Juni";
                  } elseif ($d[1] == '07') {
                    $d[1] = "Juli";
                  } elseif ($d[1] == '08') {
                    $d[1] = "Agustus";
                  } elseif ($d[1] == '09') {
                    $d[1] = "September";
                  } elseif ($d[1] == '10') {
                    $d[1] = "Oktober";
                  } elseif ($d[1] == '11') {
                    $d[1] = "November";
                  } elseif ($d[1] == '12') {
                    $d[1] = "Desember";
                  }
                } ?>
                <span class="mos"><?= $d[1]; ?></span>
                <span class="yr"><?= $d[0]; ?></span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#"><?= $w['nama']; ?></a></h3>

              <p><?= $w['deskripsi']; ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <div class="col-md-12">
        <h2 class="text-center"><b>Form Registrasi Workshop</b></h2>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd9EgJHStOu4_9tJZ-yM9Ywx3gmPZCLBEiV9mG4kErasQ9Irw/viewform?embedded=true" width="100%" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
    </div>
  </div>
</section>

<?php
include './footer.php';
?>