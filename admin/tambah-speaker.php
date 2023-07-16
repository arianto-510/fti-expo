<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("Location: index.php?pesan=ilegal");
}
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $tugas = $_POST['tugas'];
    $jabatan = $_POST['jabatan'];

    $rand = rand();
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $gambar = $rand . '_' . $filename;
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '_' . $filename);

    mysqli_query($conn, "INSERT INTO speaker VALUES(null, '$nama', '$tugas', '$jabatan', '$gambar')");

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: speakers.php");
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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Speaker</h6>
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Speaker</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Speaker">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tugas</label>
                    <input type="text" class="form-control" name="tugas" placeholder="Tugas Speaker">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Speaker">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <button class="btn btn-primary" name="tambah">Tambah</button>
            </form>
        </div>

    </div>

    <?php
    include './footer.php';
    ?>