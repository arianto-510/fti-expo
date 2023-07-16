<?php
include './koneksi.php';
include './header.php';

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/sempat1.jpg');">
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

<section class="ftco-section bg-light">
	<div class="container-fluid px-4">
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
						<p>Untuk masyarakat yang mengalami kerusakan laptop/notebook silahkan untuk datang langsung ke lokasi kegiatan
						</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">Diagnosa</h4>
						<p>Panitia akan melakukan diagnosa kerusakan laptop/notebook
						</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">Konfirmasi</h4>
						<p>Panitia akan menginformasikan terkait kerusakan laptop/notebook</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">Perbaikan</h4>
						<p>Setelah Konfirmasi Kerusakan, Laptop/Notebook akan mulai dikerjakan oleh panitia</p>
					</div>
					<div class="alert alert-warning" role="alert">
						<h4 class="alert-heading">Pengembalian</h4>
						<p>Setelah selesai perbaikan, maka panitia akan menghubungi pemilik laptop/notebook</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php $result = mysqli_query($conn, "SELECT * FROM repair");
			while ($r = mysqli_fetch_row($result)) : ?>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url('./images/<?php echo $r[2]; ?>');"></div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
include './footer.php';

?>