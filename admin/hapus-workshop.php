<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM workshop WHERE id = '$id'");

if (mysqli_affected_rows($conn) > 0) {
    header("Location: workshop.php");
}
