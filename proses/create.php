<?php
date_default_timezone_set('Asia/Jakarta');
include '../koneksi.php';
$nama = $_POST['nama'];
$kota = $_POST['kota'];
$no_telp = $_POST['no_telp'];
$sebagai = $_POST['sebagai'];
$tema = $_POST['tema'];
$tgl_acara = $_POST['tgl_acara'];
$time = date("Y-m-d h:i:s");

$sql = "INSERT INTO data VALUES(NULL,'$nama','$kota','$no_telp', '$sebagai','$tema','$tgl_acara', '$time')";
$query = mysqli_query($db, $sql);
if ($query) {
    header("location:../data-peserta.php");
} else {
    echo "Gagal Input";
}