<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("Location: index.php?pesan=ilegal");
}
include '../koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM expo WHERE id = '$id'");

$r = mysqli_fetch_assoc($result);

if (isset($_POST['edit'])) {
    $deskripsi = $_POST['deskripsi'];

    $rand = rand();
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $gambar = $rand . '_' . $filename;
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '_' . $filename);

    mysqli_query($conn, "UPDATE expo SET deskripsi = '$deskripsi', gambar = '$gambar' WHERE id = '$id'");

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: expo.php");
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
            <h6 class="m-0 font-weight-bold text-primary">Edit Keterangan Expo</h6>
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $r['deskripsi']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar" value="<?= $r['gambar']; ?>">
                </div>
                <button class="btn btn-primary" name="edit">Edit</button>
            </form>
        </div>

    </div>

    <?php
    include './footer.php';
    ?>