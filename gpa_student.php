<?php
    // Menyertakan file koneksi.php untuk melakukan koneksi ke database
    require_once "./src/config/koneksi.php";
    
    // Membuat objek dari kelas GpasStudent dan memanggil metode tampilData untuk mengambil data GPA mahasiswa dari database
    $gpa_student = new GpasStudent();
    $hasil = $gpa_student->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur encoding karakter dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat mobile -->
    <title>GPA Student</title> <!-- Menentukan judul halaman sebagai "GPA Student" -->
    
    <!-- Menyertakan file CSS Bootstrap 5.3.3 dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
   <link rel="stylesheet" href="./src/style.css"> 
</head>

<?php require_once "./src/partials/navbar.php"; ?> 
<!-- Menyertakan file PHP eksternal 'navbar.php' untuk menampilkan navigasi di halaman -->

<body>

<!-- Membuat tabel dengan class Bootstrap 'table' untuk menampilkan data GPA mahasiswa -->
<div class="m-5">
<table class="table" id="Table">
  <thead>
    <tr>
      <th scope="col">No</th> <!-- Kolom untuk nomor urut -->
      <th scope="col">ID Student</th> <!-- Kolom untuk menampilkan ID Mahasiswa -->
      <th scope="col">Cumulative GPA</th> <!-- Kolom untuk menampilkan GPA Kumulatif -->
    </tr>
  </thead>
<tbody>
  <?php 
    $no = 1; // Inisialisasi variabel untuk nomor urut
    foreach($hasil as $row) : // Loop melalui setiap baris data GPA yang didapatkan dari database
  ?>
    <tr>
        <td><?=$no++ ?></td> <!-- Menampilkan nomor urut, kemudian menaikkan nilai $no untuk baris berikutnya -->
        <td><?=$row['id_student'] ?></td> <!-- Menampilkan ID Mahasiswa -->
        <td><?=$row['cumulative_gpa'] ?></td> <!-- Menampilkan GPA Kumulatif -->
    </tr>
  <?php endforeach ?> <!-- Mengakhiri loop foreach -->
</tbody>
</table> 
</div>


<!-- Menyertakan JavaScript Bootstrap 5.3.3 dari CDN untuk mendukung interaktivitas halaman -->
<?php
require_once './src/partials/footer.php';
?>