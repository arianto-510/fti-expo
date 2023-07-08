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
      <div class="col-md-6 col-lg-4 ftco-animate">
        <?php
        include './koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM workshop");
        while ($w = mysqli_fetch_assoc($query)) :
        ?>
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/<?= $w['gambar']; ?>');">
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
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Regitrasi <span class="ion-ios-arrow-round-forward"></span></a></p>
              </div>
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