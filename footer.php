<?php include './koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM sponsor");
$support = mysqli_query($conn, "SELECT * FROM support");
$patner = mysqli_query($conn, "SELECT * FROM patner");

?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2">Support By : </h2>
                    <?php while ($s = mysqli_fetch_assoc($support)) : ?>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="./admin/gambar/<?= $s['gambar']; ?>" height="80px">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2">Sponsored By : </h2>
                    <?php while ($s = mysqli_fetch_assoc($result)) : ?>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="./admin/gambar/<?= $s['gambar']; ?>" height="80px">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2">Media Partner : </h2>
                    <?php while ($s = mysqli_fetch_assoc($patner)) : ?>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="./admin/gambar/<?= $s['gambar']; ?>" height="80px">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | Develop by <i class="icon-heart" aria-hidden="true"></i> by <a href="https://github.com/arianto-510" target="_blank">Popa Learn</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>