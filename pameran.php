<?php
include './koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM pameran");

$p = mysqli_fetch_assoc($result);

include './header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/sempat1.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Pameran IT</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pameran IT <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container-fluid px-4">
		<div class="row">
			<div class="col-md-4">
				<h2>Tentang Pameran IT</h2>
				<p align="justify"><?= $p['deksripsi']; ?></p>
			</div>
			<div class="col-md-8">
				<img src="./admin/gambar/<?= $p['gambar']; ?>" class="col-md-12">
			</div>
		</div>
	</div>
	</div>
</section>


<?php
include './footer.php';
?>