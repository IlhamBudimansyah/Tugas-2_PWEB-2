<?php
    // Memanggil file koneksi.php yang berisi pengaturan koneksi ke database
    require_once "./src/config/koneksi.php";
    
    // Membuat objek dari kelas Gpas dan memanggil metode tampilData untuk mengambil data GPA dari database
    $gpa = new Gpas();
    $hasil = $gpa->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Menentukan set karakter dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat seluler -->
    <title>GPA</title> <!-- Menentukan judul halaman sebagai "GPA" -->
    
    <!-- Menyertakan CSS Bootstrap 5.3.3 dari CDN untuk styling tabel dan halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
          <style>
            .table th {
            background-color: #007bff;
            color: white;
        }
          </style>
</head>

<?php require_once "./src/partials/navbar.php"; ?> 
<!-- Memasukkan file PHP eksternal 'navbar.php' untuk menampilkan navigasi di halaman -->

<body>

<!-- Membuat tabel dengan class Bootstrap 'table' untuk menampilkan data GPA -->
<div class="m-5">
<table class="table" id="Table">
  <thead>
    <tr>
      <th scope="col">No</th> <!-- Kolom untuk nomor urut -->
      <th scope="col">ID GPA</th> <!-- Kolom untuk menampilkan ID GPA -->
      <th scope="col">ID Student</th> <!-- Kolom untuk menampilkan ID Student -->
      <th scope="col">Cumulative GPA</th> <!-- Kolom untuk menampilkan Cumulative GPA -->
    </tr>
  </thead>
<tbody>
  <?php 
    $no = 1; // Inisialisasi variabel untuk nomor urut
    foreach($hasil as $row) { // Loop melalui setiap baris data GPA yang didapatkan dari database
  ?>
    <tr>
        <td><?=$no++ ?></td> <!-- Menampilkan nomor urut, lalu increment nilai $no -->
        <td><?=$row['id_gpa'] ?></td> <!-- Menampilkan ID GPA dari data -->
        <td><?=$row['id_student'] ?></td> <!-- Menampilkan ID Student dari data -->
        <td><?=$row['cumulative_gpa'] ?></td> <!-- Menampilkan Cumulative GPA dari data -->
    </tr>
    <?php } ?> <!-- Mengakhiri loop foreach -->
</tbody>
</table>

</div>


<!-- Menyediakan tautan untuk melihat data sebagai student/mahasiswa, mengarahkan ke gpa_student.php -->
<h4>Lihat sebagai <a href="gpa_student.php">student/mahasiswa</a></h4>

<!-- Menyertakan JavaScript Bootstrap 5.3.3 dari CDN untuk mendukung interaktivitas halaman -->
<?php

require_once './src/partials/footer.php';
?>
