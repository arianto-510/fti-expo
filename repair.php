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