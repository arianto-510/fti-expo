<?php include './koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM sponsor");
$support = mysqli_query($conn, "SELECT * FROM support");
$patner = mysqli_query($conn, "SELECT * FROM patner");

?>

<footer class="ftco-footer bg-light ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2 text-dark">Organized By: </h2>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <img src="./admin/gambar/USN.png" height="80px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2 text-dark">Supported By : </h2>
                    <?php while ($s = mysqli_fetch_assoc($support)) : ?>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="./admin/gambar/<?= $s['gambar']; ?>" height="80px">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2 text-dark">Sponsored By : </h2>
                    <?php while ($s = mysqli_fetch_assoc($result)) : ?>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="./admin/gambar/<?= $s['gambar']; ?>" height="80px">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>


            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-3 text-center">
                    <h2 class="ftco-heading-2 text-dark">Media Partner : </h2>
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

            <p class="text-dark">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved
            </p>
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