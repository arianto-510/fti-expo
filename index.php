<?php
include './header.php';
?>
<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image:url(images/sempat1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 ftco-animate">
					<h1 class="mb-4">SEMPATIN FTI</h1>
					<p>Seminar Nasional Pemanafaatan Sains dan Teknologi Informasi</p>
					<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image:url(images/sempat2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 ftco-animate">
					<h1 class="mb-4">Workshop Teknologi Informasi</h1>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-services ftco-no-pb">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-teacher"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Seminar IT</h3>
						<p>Seminar Pemanafaatan Sains dan Teknologi Informasi FTI USN Kolaka</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #001253;">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-reading"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Pameran IT</h3>
						<p>Pementasan Hasil Karya Mahasiswa Fakultas Teknologi Informasi berupa Produk IT</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-books"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Free Repair</h3>
						<p>Jasa Perbaikan Perangkat Komputer/PC Secara Gratis</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #001253;">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-diploma"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Workshop</h3>
						<p>Pelatihan Pembelajaran Teknologi Informasi Dengan Konsenrasi Ilmu Komputer</p>
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
							<div class="img align-self-stretch" style="background-image: url(images/<?= $s['gambar']; ?>); background-color: #3E6D9C;"></div>
						</div>

						<div class="text pt-3 text-center">
							<h3><?= $s['nama']; ?></h3>
							<span class="position mb-2"><?= $s['tugas']; ?></span>
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
				<div class="img" style="background-image: url(images/course-8.jpg);"></div>
			</div>
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
				<h2 class="mb-4">Tentang IT Expo FTI USN Kolaka</h2>
				<p>IT Expo merupakan platform Seminar Nasional yang menampilkan artikel asli dari berbagai peneliti, akademisi, praktisi, dan pengusaha bisnis untuk menciptakan peluang penelitian yang berorientasi global di era pasca pandemi dengan memanfaatkan teknologi transformasi digital.Pagelaran SEMNAS Corisindo oleh ITB STIKOM Bali, CORIS dan INDOCEISS pada tanggal 11-12 Agustus 2022, bertempat di Bali, Indonesia, bertema “Seminar Nasional & Seminar Pengabdian Kepada Masyarakat”.
				<h4>Rangkaian Kegiatan IT Expo :</h4>
				</p>
				<div class="row mt-5">
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>Seminar</h3>
								<p>Seminar Nasiaonal</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
							<div class="text pl-3">
								<h3>Workshop</h3>
								<p>Belajar IT</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
							<div class="text pl-3">
								<h3>Free Repair</h3>
								<p>Stand Services Gratis</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
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

<!-- <section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Recent</span> Blog</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">26</span>
							<span class="mos">June</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">26</span>
							<span class="mos">June</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">26</span>
							<span class="mos">June</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Support By</h2>
			</div>
		</div>
		<div class="row ftco-animate justify-content-center">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/REKTOR.PNG);">
							</div>
							<div class="text ml-2">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
								<p class="name">Dr. H. Nur Ihsan HL, M.Hum.</p>
								<span class="position">Mother</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<?php
include './footer.php';
?>