# Tugas 2 Praktikum Pemrograman Web
## Tentang saya 
Nama : Ilham Budimansyah \
Kelas : TI-2A \
NIM : 230302013
-
## Overview
SIWALI JKB adalah sistem manajemen bimbingan akademik yang dirancang untuk mempermudah pengelolaan kinerja mahasiswa, konseling, dan data akademik lainnya di institusi pendidikan tinggi.
## Task
1. **membuat view berbasis OOP PHP dengan menerima data dari mySQL database (tabel reports, gpas dan gpa_details)**
2. **menggunakan __construct sebagai link untuk menghubungan ke database**
    ```php
        public function __construct()
    {
        // Membuat koneksi ke database menggunakan MySQLi
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
    }
    ```
3. **menerapkan encapsulation berdasarkan studi kasus**
    ```php
    // Properti untuk menyimpan informasi konfigurasi koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "pweb_2";
    // Properti protected untuk menyimpan objek koneksi database
    protected $conn;

    ```
4. **menggunakan kelas turunan dengan konsep inheritance**
    ```php
    class Database
    {
      #code
    }
    class Gpas extends Database
    {
      # code
    }

    class GpasStudent extends Gpas
    {
      # code
    }
    ```
5. **menerapkan polymorphiism**
    ```php
    class Gpas extends Database
    {
        public function tampilData()
        {
          # code
        }
    }

    class GpasStudent extends Gpas
    {
        public function tampil_data()
        {
          # code yang berbeda
        }
    }
    ```
## ERD (Entity Relationship Diagram)
![image](https://github.com/user-attachments/assets/10762b63-e095-497b-8f74-9e884e8f2286)
## Tampilan Program
+ menampilkan seluruh isi tabel gpas
![image](https://github.com/user-attachments/assets/fa41da9c-0416-433d-ab40-c7313e8fad86)
+ menampilkan seluruh isi tabel gpa_details
![image](https://github.com/user-attachments/assets/15a5883d-cec7-4303-9986-77ae4f5bcc10)
+  menampilkan seluruh isi tabel reports
![image](https://github.com/user-attachments/assets/9920dec0-b73b-4d08-80a7-b1f33cba354b)
+  menampilkan isi tabel gpas yang memiliki ID GPA sama dengan 1
![image](https://github.com/user-attachments/assets/99084304-7c76-4fd5-9770-8c418c4590b2)
+ menampilkan isi tabel gpa_details yang memiliki ID GPA DETAILS sama dengan 1
![image](https://github.com/user-attachments/assets/37d8b1ab-2324-4f91-8c7f-b187c7ce4133)
+ menampilkan isi tabel reports yang status-nya Approved
![image](https://github.com/user-attachments/assets/01bac6fc-791f-4f75-b69a-e0ca101e60b3)
