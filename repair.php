<?php
include './koneksi.php';
include './header.php';

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/repair.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Free Repair</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Free Repair <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<?php
$result = mysqli_query($conn, "SELECT * FROM repair");
$r = mysqli_fetch_assoc($result);
?>

<section class="ftco-section bg-light">
	<div class="container-fluid px-4">
		<div class="row">
			<div class="col-md-6">
				<h2>Free Repair</h2>
				<p class="text-justify"><?= $r['deksripsi']; ?></p>
				<img src="./admin/gambar/<?= $r['gambar']; ?>" class="col-md-12 my-4">
			</div>
			<div class="col-md-6">
				<h2>Alur Pendaftaran</h2>
				<div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">1. Pendaftaran</h4>
						<p>Untuk masyarakat yang mengalami kerusakan laptop/notebook silahkan untuk datang langsung ke lokasi kegiatan
						</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">2. Diagnosa</h4>
						<p>Panitia akan melakukan diagnosa kerusakan laptop/notebook
						</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">3. Konfirmasi</h4>
						<p>Panitia akan menginformasikan terkait kerusakan laptop/notebook</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">4. Perbaikan</h4>
						<p>Setelah Konfirmasi Kerusakan, Laptop/Notebook akan mulai dikerjakan oleh panitia</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">5. Pengembalian</h4>
						<p>Setelah selesai perbaikan, maka panitia akan menghubungi pemilik laptop/notebook</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include './footer.php';

?>