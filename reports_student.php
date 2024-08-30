<?php
    // Menyertakan file koneksi.php untuk menghubungkan ke database
    require_once "koneksi.php";

    // Membuat objek dari kelas ReportsStudent dan memanggil metode tampilData untuk mengambil data laporan yang sudah disetujui (Approved)
    $reports_student = new ReportsStudent();
    $hasil = $reports_student->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur encoding karakter dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat mobile -->
    <title>REPORTS</title> <!-- Menentukan judul halaman sebagai "REPORTS" -->
    
    <!-- Menyertakan file CSS Bootstrap 5.3.3 dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
</head>

<?php require_once "navbar.php"; ?> 
<!-- Menyertakan file PHP eksternal 'navbar.php' untuk menampilkan navigasi di halaman -->

<body>

<!-- Membuat tabel dengan class Bootstrap 'table' untuk menampilkan data laporan -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th> <!-- Kolom untuk nomor urut -->
      <th scope="col">ID WARNING</th> <!-- Kolom untuk menampilkan ID Peringatan -->
      <th scope="col">ID GPA DETAIL</th> <!-- Kolom untuk menampilkan ID Detail GPA -->
      <th scope="col">ID GUIDANCE</th> <!-- Kolom untuk menampilkan ID Bimbingan -->
      <th scope="col">ID ACHIEVEMENTS</th> <!-- Kolom untuk menampilkan ID Prestasi -->
      <th scope="col">ID SCHOLARSHIP</th> <!-- Kolom untuk menampilkan ID Beasiswa -->
      <th scope="col">ID STUDENT WITHDRAWALS</th> <!-- Kolom untuk menampilkan ID Pengunduran Diri Mahasiswa -->
      <th scope="col">ID TUITION AREAS</th> <!-- Kolom untuk menampilkan ID Area Pembayaran -->
      <th scope="col">REPORT DATE</th> <!-- Kolom untuk menampilkan Tanggal Laporan -->
      <th scope="col">STATUS</th> <!-- Kolom untuk menampilkan Status Laporan -->
      <th scope="col">HAS ACC ACADEMIC ADVISOR</th> <!-- Kolom untuk menampilkan Apakah Sudah Disetujui oleh Pembimbing Akademik -->
      <th scope="col">HAS ACC HEAD OF PROGRAM</th> <!-- Kolom untuk menampilkan Apakah Sudah Disetujui oleh Kepala Program -->
    </tr>
  </thead>
<tbody>
  <?php 
    $no = 1; // Inisialisasi variabel untuk nomor urut
    foreach($hasil as $row) { // Loop melalui setiap baris data laporan yang didapatkan dari database
  ?>
    <tr>
        <td><?=$no++ ?></td> <!-- Menampilkan nomor urut, kemudian menaikkan nilai $no untuk baris berikutnya -->
        <td><?=$row['id_warnings'] ?></td> <!-- Menampilkan ID Peringatan -->
        <td><?=$row['id_gpa_detail'] ?></td> <!-- Menampilkan ID Detail GPA -->
        <td><?=$row['id_guidance'] ?></td> <!-- Menampilkan ID Bimbingan -->
        <td><?=$row['id_achievments'] ?></td> <!-- Menampilkan ID Prestasi -->
        <td><?=$row['id_sholarship'] ?></td> <!-- Menampilkan ID Beasiswa -->
        <td><?=$row['id_student_withdrawls'] ?></td> <!-- Menampilkan ID Pengunduran Diri Mahasiswa -->
        <td><?=$row['id_tuition_areas'] ?></td> <!-- Menampilkan ID Area Pembayaran -->
        <td><?=$row['report_date'] ?></td> <!-- Menampilkan Tanggal Laporan -->
        <td><?=$row['status'] ?></td> <!-- Menampilkan Status Laporan -->
        <td><?=$row['has_acc_academic_advisor'] ?></td> <!-- Menampilkan Status Persetujuan Pembimbing Akademik -->
        <td><?=$row['has_acc_head_of_program'] ?></td> <!-- Menampilkan Status Persetujuan Kepala Program -->
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
