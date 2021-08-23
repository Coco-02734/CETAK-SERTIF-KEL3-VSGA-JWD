<?php
date_default_timezone_set('Asia/Jakarta');
require_once("../assets/dompdf/autoload.inc.php");
include "../koneksi.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$id = $_GET['id'];
$query = mysqli_query($db,"select * from data where id_peserta='$id'");
$r_data = mysqli_fetch_array($query);
$nama = $r_data['nama_peserta'];
$tema = $r_data['tema'];
$tgl_acara = $r_data['tgl_acara'];
$sebagai = $r_data['sebagai'];

$html = '
<!DOCTYPE html><html><head><link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" /><link href="../assets/css/main.css" rel="stylesheet" /><title>Document</title></head>
<body><center><div class="v4_15"><div class="v4_14"></div><span class="v1_56">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN
TEAM 3</span><span class="v1_57">SERTIFIKAT</span><span class="v4_2"> <center>No :'. rand() .'</center></span><span class="v1_58">Diberikan Kepada</span><span class="v1_60"> <center>'. $nama .'</center></span><div class="v1_61"></div><span class="v1_62">Atas peran serta sebagai ' . $sebagai .' dalam kegiatan webinar dengan tema "'. $tema .'" yang diselenggarakan oleh Gabungan dari peserta VSGA DTS JWD 2021, Diadakan pada tanggal '. $tgl_acara .'  


</span>
<span class="v1_65">Ketua Panitia</span><span class="v2_92">Fernandes Yusril Al Depi Widi</span><div class="v7_18"></div></div></center></body></html>
';



//download pdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$time = date("Y-m-d h:i:sa");
$dompdf->stream($time . '_Sertifikat.pdf', array('Attachment' => 0));
