<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM support WHERE id = '$id'");

header("Location: ./support.php");
