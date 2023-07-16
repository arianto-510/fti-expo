<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("Location: index.php?pesan=ilegal");
}
include '../koneksi.php';
include './header.php';
$result = mysqli_query($conn, "SELECT * FROM workshop");
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Speakers</h6>
        </div>
        <div class="card-body">
            <a href="tambah-speaker.php" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Workshop</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($w = mysqli_fetch_row($result)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $w[1]; ?></td>
                                <td><?= $w[2]; ?></td>
                                <td><?= $w[3]; ?></td>
                                <td><?= $w[4]; ?></td>
                                <td>
                                    <a onclick="return confirm('Yakin dihapus')" href="hapus-speaker.php?id=<?= $s['id']; ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
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