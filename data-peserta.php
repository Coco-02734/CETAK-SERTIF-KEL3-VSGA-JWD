<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Sertifikat</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand">Hai Sertifikasi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="cetak.php">Cetak Sertif <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="data-peserta.php">Data Peserta <span class="sr-only">(current)</span></a>
        </li>
    </div>
  </nav>

  <!-- Optional JavaScript; choose one of the two! -->
  <div class="container">

    <center>
      <h3 class="font-weight-bold mt-3 ml-4">Halaman Data Peserta</h3>
    </center />
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Peserta</th>
          <th scope="col">Nomer Telpn</th>
          <th scope="col">Asal Kota</th>
          <th scope="col">Sebagai</th>
          <th scope="col">Tema</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        include "koneksi.php";
        $sql = "SELECT * FROM data";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {

        ?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo  $data['nama_peserta']; ?></td>
            <td><?php echo  $data['no_tlpn']; ?></td>
            <td><?php echo  $data['asal_kota']; ?></td>
            <td><?php echo  $data['sebagai']; ?></td>
            <td><?php echo  $data['tema']; ?></td>
            <td><a href="proses/cetak-pdf.php?id=<?php echo  $data['id_peserta']; ?>" class="btn btn-warning">Cetak Sertifikat</a></td>
          </tr>
        <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  -->
</body>

</html>