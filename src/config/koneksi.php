<?php

// Mendefinisikan kelas Database untuk menangani koneksi ke database
class Database
{
    // Properti untuk menyimpan informasi konfigurasi koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "pweb_2";
    // Properti protected untuk menyimpan objek koneksi database
    protected $conn;

    // Konstruktor untuk menginisialisasi koneksi ke database
    public function __construct()
    {
        // Membuat koneksi ke database menggunakan MySQLi
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        
        // Mengecek apakah koneksi berhasil
        if (!$this->conn) 
        {
            // Jika koneksi gagal, tampilkan pesan kesalahan dan hentikan eksekusi
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

// Mendefinisikan kelas Gpas yang merupakan turunan dari kelas Database
class Gpas extends Database
{
    // Metode untuk menampilkan data dari tabel 'gpas'
    public function tampilData()
    {
        $sql = "SELECT * FROM gpas"; // Query SQL untuk mengambil semua data dari tabel 'gpas'
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        $hasil = [];
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

// Mendefinisikan kelas GpasStudent yang merupakan turunan dari kelas Gpas
class GpasStudent extends Gpas
{
    // Metode untuk menampilkan data dari tabel 'gpas' dengan kondisi tertentu
    public function tampilData()
    {
        $sql = "SELECT * FROM gpas WHERE id_gpa='1'"; // Query SQL untuk mengambil data dengan id_gpa tertentu
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

// Mendefinisikan kelas GpaDetails yang merupakan turunan dari kelas Database
class GpaDetails extends Database
{
    // Metode untuk menampilkan data dari tabel 'gpa_details'
    public function tampilData()
    {
        $sql = "SELECT * FROM gpa_details"; // Query SQL untuk mengambil semua data dari tabel 'gpa_details'
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

// Mendefinisikan kelas GpaDetailsStudent yang merupakan turunan dari kelas GpaDetails
class GpaDetailsStudent extends GpaDetails
{
    // Metode untuk menampilkan data dari tabel 'gpa_details' dengan kondisi tertentu
    public function tampilData()
    {
        $sql = "SELECT * FROM gpa_details WHERE id_gpa_detail='1'"; // Query SQL untuk mengambil data dengan id_gpa_detail tertentu
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

// Mendefinisikan kelas Reports yang merupakan turunan dari kelas Database
class Reports extends Database
{
    // Metode untuk menampilkan data dari tabel 'reports'
    public function tampilData()
    {
        $sql = "SELECT * FROM reports"; // Query SQL untuk mengambil semua data dari tabel 'reports'
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

// Mendefinisikan kelas ReportsStudent yang merupakan turunan dari kelas Reports
class ReportsStudent extends Reports
{
    // Metode untuk menampilkan data dari tabel 'reports' dengan kondisi tertentu
    public function tampilData()
    {
        $sql = "SELECT * FROM reports WHERE status='Approved'"; // Query SQL untuk mengambil data dengan status 'Approved'
        
        // Menjalankan query dan menyimpan hasilnya
        $data = mysqli_query($this->conn, $sql);
        
        // Menyimpan hasil query dalam array
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil; // Mengembalikan array hasil
    }
}

?>
