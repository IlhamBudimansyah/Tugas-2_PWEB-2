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
![image](https://github.com/user-attachments/assets/7d42cb8a-2928-4f66-bc7f-f5cb235aab12)
+ menampilkan seluruh isi tabel gpa_details
![image](https://github.com/user-attachments/assets/70dec389-46b6-40fb-af08-078265f0eddb)
+  menampilkan seluruh isi tabel reports
![image](https://github.com/user-attachments/assets/243c5f77-675f-4175-ad6f-ab7afece8691)
+  menampilkan isi tabel gpas yang memiliki ID GPA sama dengan 1
![image](https://github.com/user-attachments/assets/d47ceaad-4212-44fc-8588-6534737d98b1)
+ menampilkan isi tabel gpa_details yang memiliki ID GPA DETAILS sama dengan 1
![image](https://github.com/user-attachments/assets/227005e5-7566-4116-a9cc-a51554738b27)
+ menampilkan isi tabel reports yang status-nya Approved
![image](https://github.com/user-attachments/assets/acb17350-ff2b-4a50-a7ac-8a6ac9b9f5e4)
