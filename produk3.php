<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Checkout</title>
  <!-- Menghubungkan dengan file CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Menghubungkan dengan file CSS tambahan -->
  <style>
    .container {
  margin-top: 50px;
  max-width: 600px;
}

.checkout-box {
  border: 1px solid #ccc;
  padding: 20px;
}

.image-container {
  text-align: center;
  margin-bottom: 20px;
}

.image-container img {
  max-width: 100%;
  height: auto;
}

.checkout-form h1 {
  text-align: center;
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

.btn-primary {
  margin-top: 20px;
}
.image-container img {
  max-width: 200px;
  height: auto;
}

</style>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "olshop";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
<?php
    $pengguna = mysqli_query($conn, "select * from pengguna");
    foreach ($pengguna as $value)?>
  <div class="container">
    <div class="checkout-box">
      <div class="image-container">
        <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzM0OTQyL2YxYzNkMjBlZTRhNTI1MjNjNzJjZmVkNTRlYmRjYjFhLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Gambar Produk">
      </div>

      <div class="checkout-form">
        <h1>Checkout</h1>

        <form id="checkoutForm">
          <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
          </div>
          <div class="form-group">
            <label for="address">Alamat:</label>
            <textarea class="form-control" id="address" placeholder="Masukkan alamat"></textarea>
          </div>
          <div class="form-group">
            <label for="payment">Metode Pembayaran:</label>
            <select class="form-control" id="payment">
              <option value="credit_card">Kartu Kredit</option>
              <option value="bank_transfer">Transfer Bank</option>
              <option value="cod">Cash on Delivery</option>
            </select>
          </div>
          <a href="last.php" class="btn btn-primary">Beli</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Menghubungkan dengan file JavaScript Bootstrap dan JavaScript tambahan -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Fungsi untuk mengisi nilai default pada form
    function fillForm() {
      // Mengisi nilai default pada form
      document.getElementById('name').value = '<?php echo $value["nama"]?>';
      document.getElementById('email').value = '<?php echo $value["email"]?>';
      document.getElementById('address').value = '<?php echo $value["alamat"]?>';
    }

    // Panggil fungsi fillForm saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', fillForm);
  </script>
</body>
</html>
