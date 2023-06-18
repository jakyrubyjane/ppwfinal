<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olshop";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data yang akan diinputkan (misalnya melalui form)
$data1 = $_POST['Air Jordan 1'];
$data2 = $_POST['3.850.000'];

// Membuat query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pesanan VALUES ("Air Jordan 1","3,850,000")";

// Menjalankan query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam tabel.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>
