<!DOCTYPE html>
<html lang="en"> <!-- Deklarasi tipe dokumen sebagai HTML5 -->
<head>
    <meta charset="UTF-8"> <!-- Menentukan set karakter dokumen sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar responsif pada perangkat seluler -->
    <title>Document</title> <!-- Menentukan judul halaman yang akan tampil di tab browser -->

    <!-- Menyertakan CSS Bootstrap 5.3.3 dari CDN untuk styling halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous"> <!-- Atribut integrity dan crossorigin untuk memastikan file yang diunduh sesuai dengan sumber yang dipercaya -->
</head>

<?php require_once "navbar.php" ?> 
<!-- Menyertakan file PHP eksternal 'navbar.php'. Jika file ini tidak ditemukan, skrip akan dihentikan. 
Ini berguna untuk menyertakan elemen navigasi yang konsisten di seluruh halaman -->

<body>
    <!-- Badan dokumen dimulai di sini -->
    
    <!-- Menyertakan JavaScript Bootstrap 5.3.3 dari CDN untuk interaktivitas halaman -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script> <!-- Seperti pada CSS, integrity dan crossorigin memastikan keamanan file yang diunduh -->
</body>
</html>
