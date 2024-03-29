<?php
include './koneksi.php';

include './header.php';
?>
<section class="home-slider owl-carousel">
	<?php $banner = mysqli_query($conn, "SELECT * FROM banner");
	while ($b = mysqli_fetch_row($banner)) : ?>
		<div class="slider-item" style="background-image:url(admin/gambar/<?= $b[3]; ?>); height: 100%;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4"><?= $b[1]; ?></h1>
						<p><?= $b[2]; ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</section>

<section class="ftco-services ftco-no-pb">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #801424;">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-teacher"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<a href="./call_paper.php">
							<h3 class="heading">SEMPATIN dan Call For Paper</h3>
						</a>
						<p>Seminar Pemanafaatan Sains dan Teknologi Informasi FTI USN Kolaka</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #001253;">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-reading"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<a href="./pameran.php">
							<h3 class="heading">Pameran IT</h3>
						</a>
						<p>Pementasan Hasil Karya Mahasiswa Fakultas Teknologi Informasi berupa Produk IT</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #801424;">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-books"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<a href="./call_paper.php">
							<h3 class="heading">Free Repair</h3>
						</a>
						<p>Jasa Perbaikan Perangkat Komputer/PC Secara Gratis</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container-fluid px-4">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Our Speakers</h2>
			</div>
		</div>
		<div class="row">
			<?php
			include './koneksi.php';
			$query = mysqli_query($conn, "SELECT * FROM speaker");
			?>
			<?php while ($s = mysqli_fetch_assoc($query)) : ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(admin/gambar/<?= $s['gambar']; ?>);"></div>
						</div>

						<div class="text pt-3 text-center">
							<h4><?= $s['nama']; ?></h4>
							<span class="position mb-2" style="color: #801424"><?= $s['tugas']; ?></span>
							<div class="faded">
								<p><?= $s['jabatan']; ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
				<div class="img" style="background-image: url(./admin/gambar/paper.jpg);"></div>
			</div>
			<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
				<h2 class="mb-4">Rangkaian Kegiatan IT Expo :</h2>
				<div class="row mt-5">
					<div class="col-lg-6">
						<a class="services-2 d-flex">
							<div class="icon mt-2 d-flex bg-dark justify-content-center align-items-center"><span class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>Seminar</h3>
								<p>Seminar Nasional</p>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex bg-dark justify-content-center align-items-center"><span class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>Call of Paper</h3>
								<p>Submit Artikel Ilmiah</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex bg-dark justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
							<div class="text pl-3">
								<h3>Free Repair</h3>
								<p>Stand Services Gratis</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex bg-dark justify-content-center align-items-center"><span class="flaticon-education"></span></div>
							<div class="text pl-3">
								<h3>Pameran</h3>
								<p>Showing IT Product</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<h2 class="mb-4 text-center">Waktu Pelaksanaan</h2>
<section class="ftco-section ftco-counter img mt-5" id="section-counter" data-stellar-background-ratio="0.5" style="background-image: url('images/it-expo.jpg');">
	<div class="container">
		<!-- <div class="row justify-content-center my-5 pb-2 d-flex">
		</div> -->
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-lg-12">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" id="dy">0</strong>
								<span>Hari</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" id="jm">0</strong>
								<span>Jam</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" id="mt">0</strong>
								<span>Menit</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" id="dt">0</strong>
								<span>Detik</span>
							</div>
						</div>
					</div>
				</div>
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

<script>
	const tglTujuan = new Date('Sep 4, 2023 06:00:00').getTime();

	const mundur = setInterval(function() {
		const tglSekarang = new Date().getTime();
		const selisih = tglTujuan - tglSekarang;

		const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
		const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
		const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
		const detik = Math.floor(selisih % (1000 * 60) / 1000);

		document.getElementById('dy').innerHTML = hari;
		document.getElementById('jm').innerHTML = jam;
		document.getElementById('mt').innerHTML = menit;
		document.getElementById('dt').innerHTML = detik;

		if (selisih < 0) {
			clearInterval(mundur);
			document.getElementById('dy').innerHTML = 00;
			document.getElementById('jm').innerHTML = 00;
			document.getElementById('mt').innerHTML = 00;
			document.getElementById('dt').innerHTML = 00;
		}
	}, 1000);
</script>

<?php
include './footer.php';
?>