<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputNis" class="form-label">Judul</label>
          <input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Masukan Judul Buku">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="inputPenulis" name="penulis" placeholder="Masukan Penulis Buku">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="inputPenerbit" name="penerbit" placeholder="Masukan Tahun Produksi">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $judul = $_POST['judul'];
      $penulis = $_POST['penulis'];
      $penerbit = $_POST['penerbit'];

      // Membuat Query
      $query = "INSERT INTO tb_tokobuku (judul, penulis, penerbit) VALUES('".$judul."', '".$penulis."', '".$penerbit."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        echo "<script>alert('Data Ditambahkan!')</script>";
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>