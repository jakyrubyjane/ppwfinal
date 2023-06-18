<!DOCTYPE html>
<html>
<head>
  <title> Profil</title>
  <!-- Tambahkan link ke Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-img {
      border-radius: 50%;
      width: 200px;
      height: 200px;
      margin-bottom: 20px;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .profile-description {
      color: #666;
      margin-bottom: 30px;
    }

    .contact-info {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .contact-info li {
      margin-bottom: 10px;
    }

    .contact-info li span {
      font-weight: bold;
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
  <div class="row">
    <div class="col-md-4 text-center">
      <img src="https://via.placeholder.com/200" alt="Profil" class="profile-img">
    </div>
    <div class="col-md-8">
      <h1 class="profile-name"><?php echo $value["nama"]?></h1>
      <p class="profile-description"><?php echo $value["id_pengguna"]?></p>
      <h3>Informasi Kontak</h3>
      <ul class="contact-info">
        <li><span>Email:</span> <?php echo $value["email"]?></li>
        <li><span>Telepon:</span> <?php echo $value["telepon"]?></li>
        <li><span>Alamat:</span> <?php echo $value["alamat"]?></li>
      </ul>
    </div>
  </div>
</div>

<!-- Tambahkan script Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
