<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("Location: index.php?pesan=ilegal");
}
include '../koneksi.php';
include './header.php';
$result = mysqli_query($conn, "SELECT * FROM pameran");
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pameran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Deskrispi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($p = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $p['deksripsi']; ?></td>
                                <td><img src="./gambar/<?= $p['gambar']; ?>" width="180px"></td>
                                <td>
                                    <a href="edit-pameran.php?id=<?= $p['id']; ?>" class="btn btn-success btn-circle">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php include './footer.php'; ?>