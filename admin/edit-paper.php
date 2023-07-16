<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("Location: index.php?pesan=ilegal");
}
include '../koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM paper");

$p = mysqli_fetch_row($result);

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $tentang = htmlspecialchars($_POST['tentang']);
    $register = htmlspecialchars($_POST['register']);
    $submit = htmlspecialchars($_POST['submit']);
    $template = htmlspecialchars($_POST['template']);
    $tgl_kumpul = htmlspecialchars($_POST['tgl_kumpul']);
    $tgl_pengumuman = htmlspecialchars($_POST['tgl_pengumuman']);
    $tgl_revisi = htmlspecialchars($_POST['tgl_revisi']);
    $tgl_kegiatan = htmlspecialchars($_POST['tgl_kegiatan']);

    $rand = rand();
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $gambar = $rand . '_' . $filename;
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '_' . $filename);

    mysqli_query($conn, "UPDATE paper SET tentang = '$tentang', register = '$register', template = '$template', submit = '$submit', tgl_kumpul = '$tgl_kumpul',  tgl_pengumuman = '$tgl_pengumuman', tgl_revisi = '$tgl_revisi', tgl_kegiatan = '$tgl_kegiatan', gambar = '$gambar' WHERE id = '$id'");

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: paper.php");
    } else {
        echo "Gagal";
    }
}


include './header.php';
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Papers</h6>
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tentang</label>
                    <textarea type="text" class="form-control" name="tentang" placeholder="Tentang"><?= $p[1] ?></textarea>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label">Link Registrasi</label>
                        <input type="text" class="form-control" name="register" placeholder="https://example.com" value="<?= $p[2] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Template</label>
                        <input type="text" class="form-control" name="template" placeholder="https://example.com" value="<?= $p[3] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Submit</label>
                        <input type="text" class="form-control" name="submit" placeholder="Tgl Submit" value="<?= $p[4] ?>">
                    </div>
                    <label class="form-label">Tanggal Submit</label>
                    <input type="date" class="form-control" name="tgl_kumpul" placeholder="Tgl Kumpul" value="<?= $p[5] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Pengumuman</label>
                    <input type="date" class="form-control" name="tgl_pengumuman" placeholder="Tanggal Pengumuman" value="<?= $p[6] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Revisi</label>
                    <input type="date" class="form-control" name="tgl_revisi" placeholder="Tanggal Revisi" value="<?= $p[7] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Kegiatan</label>
                    <input type="date" class="form-control" name="tgl_kegiatan" placeholder="Tanggal Kegiatan" value="<?= $p[8] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar" value="<?= $p[9] ?>">
                </div>
                <button class="btn btn-primary" name="edit">Edit</button>
            </form>
        </div>

    </div>

    <?php
    include './footer.php';
    ?>