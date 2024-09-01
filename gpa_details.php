<?php
    // Menyertakan file koneksi.php untuk melakukan koneksi ke database
    require_once "./src/config/koneksi.php";
    
    // Membuat objek dari kelas GpaDetails dan memanggil metode tampilData untuk mengambil data GPA detail dari database
    $gpa_details = new GpaDetails();
    $hasil = $gpa_details->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur encoding karakter dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat mobile -->
    <title>GPA DETAILS</title> <!-- Menentukan judul halaman sebagai "GPA DETAILS" -->
    
    <!-- Menyertakan file CSS Bootstrap 5.3.3 dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
     <link rel="stylesheet" href="./src/style.css"> 
</head>

<?php require_once "./src/partials/navbar.php"; ?> 
<!-- Menyertakan file PHP eksternal 'navbar.php' untuk menampilkan navigasi di halaman -->

<body>

<!-- Membuat tabel dengan class Bootstrap 'table' untuk menampilkan data GPA detail -->
<div class="m-5">

<h5 class="student-view">Lihat sebagai <a href="gpa_detail_student.php">student/mahasiswa</a></h5></table>
<table class="table" id="Table">
  <thead>
    <tr>
      <th scope="col">No</th> <!-- Kolom untuk nomor urut -->
      <th scope="col">ID GPA Details</th> <!-- Kolom untuk menampilkan ID GPA Detail -->
      <th scope="col">ID GPA</th> <!-- Kolom untuk menampilkan ID GPA -->
      <th scope="col">Semester</th> <!-- Kolom untuk menampilkan semester -->
      <th scope="col">Semester GPA</th> <!-- Kolom untuk menampilkan GPA per semester -->
    </tr>
  </thead>
<tbody>
  <?php 
    $no = 1; // Inisialisasi variabel untuk nomor urut
    foreach($hasil as $row) { // Loop melalui setiap baris data detail GPA yang didapatkan dari database
  ?>
    <tr>
        <td><?=$no++ ?></td> <!-- Menampilkan nomor urut, kemudian menaikkan nilai $no untuk baris berikutnya -->
        <td><?=$row['id_gpa_detail'] ?></td> <!-- Menampilkan ID GPA Detail -->
        <td><?=$row['id_gpa'] ?></td> <!-- Menampilkan ID GPA -->
        <td><?=$row['semester'] ?></td> <!-- Menampilkan semester -->
        <td><?=$row['semester_gpa'] ?></td> <!-- Menampilkan GPA per semester -->
    </tr>
    <?php } ?> <!-- Mengakhiri loop foreach -->
</tbody>
</table>

</div>

<!-- Menyertakan tautan untuk melihat data sebagai mahasiswa -->

<!-- Menyertakan JavaScript Bootstrap 5.3.3 dari CDN untuk mendukung interaktivitas halaman -->
<?php

require_once './src/partials/footer.php';
?>