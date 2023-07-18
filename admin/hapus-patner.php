<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM patner WHERE id = '$id'");

header("Location: ./patner.php");
