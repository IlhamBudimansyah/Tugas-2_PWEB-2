<?php
    // Memanggil file koneksi.php yang berisi pengaturan koneksi ke database
    require_once "koneksi.php";
    
    // Membuat objek dari kelas GpaDetailsStudent dan memanggil metode tampilData untuk mengambil data GPA per semester dari database
    $gpa_details_student = new GpaDetailsStudent();
    $hasil = $gpa_details_student->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat seluler -->
    <title>GPA Details Student</title> <!-- Menentukan judul halaman sebagai "GPA Details Student" -->
    
    <!-- Menyertakan CSS Bootstrap 5.3.3 dari CDN untuk styling tabel dan halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
</head>

<?php require_once "navbar.php"; ?> 
<!-- Memasukkan file PHP eksternal 'navbar.php' untuk menampilkan navigasi di halaman -->

<body>

<!-- Membuat tabel dengan class Bootstrap 'table' untuk menampilkan data GPA per semester -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th> <!-- Kolom untuk nomor urut -->
      <th scope="col">ID GPA</th> <!-- Kolom untuk menampilkan ID GPA -->
      <th scope="col">Semester</th> <!-- Kolom untuk menampilkan semester -->
      <th scope="col">Semester GPA</th> <!-- Kolom untuk menampilkan GPA per semester -->
    </tr>
  </thead>
<tbody>
  <?php 
    $no = 1; // Inisialisasi variabel untuk nomor urut
    foreach($hasil as $row) { // Loop melalui setiap baris data GPA detail yang didapatkan dari database
  ?>
    <tr>
        <td><?=$no++ ?></td> <!-- Menampilkan nomor urut, lalu increment nilai $no -->
        <td><?=$row['id_gpa'] ?></td> <!-- Menampilkan ID GPA dari data -->
        <td><?=$row['semester'] ?></td> <!-- Menampilkan semester dari data -->
        <td><?=$row['semester_gpa'] ?></td> <!-- Menampilkan GPA per semester dari data -->
    </tr>
    <?php } ?> <!-- Mengakhiri loop foreach -->
</tbody>
</table>

<!-- Menyertakan JavaScript Bootstrap 5.3.3 dari CDN untuk mendukung interaktivitas halaman -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>
</html>