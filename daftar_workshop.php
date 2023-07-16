<?php
include './koneksi.php';

if (isset($_POST['daftar'])) {
    // var_dump($_POST);
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $jenis = $_POST['jenis'];
    $motivasi = $_POST['motivasi'];

    mysqli_query($conn, "INSERT INTO daftar VALUES(null, '$nama', '$instansi', '$hp', '$alamat', '$kelamin', '$jenis', '$motivasi')");



    if (mysqli_affected_rows($conn) > 0) {
        header("Location: terimakasih.php");
    }
}

include './header.php';
?>
<style>
    .form-control {
        border-radius: 4px;
    }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/sempat1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Registrasi Workshop</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pameran IT <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h1 class="text-primary"> <b>Formulir Pendaftaran</b></h1>
    <form method="post">
        <div class="form-group">
            <label for="nama" class="text-primary">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="instansi" class="text-primary">Instansi</label>
            <input type="text" name="instansi" class="form-control">
        </div>

        <div class="form-group">
            <label for="hp" class="text-primary">Nomor HP</label>
            <input type="text" name="hp" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat" class="text-primary">Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>


        <div class="form-group">
            <label for="kelamin" class="text-primary">Jenis Kelamin</label>
            <select name="kelamin" id="workshop" class="form-control">
                <option value="" class="text-primary" hidden selected> Pilih </option>
                <option value="Laki-Laki" class="text-primary"> Laki-Laki </option>
                <option value="Perempuan" class="text-primary">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis" class="text-primary">Jenis Kegiatan</label>
            <select name="jenis" id="workshop" class="form-control">
                <option value="" class="text-primary" hidden selected> Pilih </option>
                <option value="Web Programming" class="text-primary">Web Programming</option>
                <option value="Android Programming" class="text-primary">Android Programming</option>
                <option value="Desain Grafis" class="text-primary">Desain Grafis</option>
                <option value="Video Editing" class="text-primary">Video Editing</option>
            </select>
        </div>
        <div class="form-group">
            <label for="motivasi" class="text-primary">Motivasi Mengikuti Kegiatan</label>
            <textarea type="text" name="motivasi" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary px-4 py-2" name="daftar">Daftar</button>
        </div>
    </form>
</div>
<?php
include './footer.php';
?>