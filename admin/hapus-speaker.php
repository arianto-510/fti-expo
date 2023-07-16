<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM speaker WHERE id = '$id'");

if (mysqli_affected_rows($conn) > 0) {
    header("Location: speakers.php");
}
