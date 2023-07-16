<?php
include '../koneksi.php';
include './header.php';

$result = mysqli_query($conn, "SELECT * FROM patner");

?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Media Patner</h6>
        </div>
        <div class="card-body">
            <a href="tambah-patner.php" class="btn btn-primary my-3">Tambah Media</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($s = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><img src="./gambar/<?= $s['gambar']; ?>" width="180px"></td>
                                <td>
                                    <a href="hapus-sponsor.php?id=<?= $s['id']; ?>" class="btn btn-success btn-circle">
                                        <i class="fas fa-warning-circle"></i>
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

<?php
include './footer.php';
?>