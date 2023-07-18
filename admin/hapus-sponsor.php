<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM sponsor WHERE id = '$id'");

header("Location: ./sponsor.php");
