<!DOCTYPE html>
<html>
<head>
  <title>Final</title>
  <!-- Tambahkan link ke Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar-text {
      font-size: 30px;
    }
    .gallery-container {
      margin-top: 56px; /* Tinggi navbar, disesuaikan sesuai kebutuhan */
    }
    .carousel-inner {
      background-color: white;
    }
    .advertisement {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
    }
    .carousel-item img {
      width: 500px;
      height: 500px;
      display: block;
      margin: 0 auto;
    }
    .half-width-img {
      width: 50%;
      display: block;
      margin: 0 auto;
    }
    footer {
      background-color: #f8f9fa;
      padding: 20px 0;
      width: 100%;
    }
   .social-icons a {
      color: #555;
      font-size: 20px;
      margin-right: 10px;
    }
    
  </style>
</head>
<body style="font-family='poppins', sans-serif">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://clipground.com/images/sepatu-png-1.png"  width="100" height="100">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active mr-5">
        <a class="nav-link navbar-text text-center" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active mr-5">
        <a class="nav-link navbar-text text-center" href="#tentang">Tentang</a>
      </li>
      <li class="nav-item active mr-5">
        <a class="nav-link navbar-text text-center" href="#layanan">Layanan</a>
      </li>
      <li class="nav-item active mr-5">
        <a class="nav-link navbar-text text-center" href="profile.php">Profile</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50 half-width-img" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzMxMzcxL2YxMjI3MTA3YWM4Y2FlYWE1MTY2Y2Q4NzIwZmY1NjNkLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Gambar 1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 half-width-img" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzU3Mjg3L2RhZGZlMDgxYWI5Y2NkNDhhMDlhNmZlYjMzMjE0ZGZkLmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0=" alt="Gambar 2">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 half-width-img" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzE3MjY2L2Q1MjBhMGQ3ZTM0NzA4YzZlNjVkZmYwYjMxNjA5ZGFjLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Gambar 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br>
<div class="container">
<br><br><br>
<h3 class="m-3"> New Arrival </h3>
<hr>
<br><br><br>
  <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzU4NzAwLzA4YmVkMmIzYWQ2NjAzYzBhYmYxNTkwMWNlOTEwNGQxLmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0=" alt="Produk 1">
        <div class="card-body">
          <h5 class="card-title">Air Jordan 1 High OG Spider-Man Across the Spider-Verse</h5>
          <p class="card-text">IDR 3,850,000</p>
          <a href="produk1.php" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzI0NzI1L2RhZWE1MTRlODFjMjFlMjkxNDg4OGEzOTgyMzdlZTM0LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Produk 2">
        <div class="card-body">
          <h5 class="card-title">Air Jordan 1 Low Fragment x Travis Scott</h5>
          <p class="card-text">IDR 17,000,000</p>
          <a href="produk2.php" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzM0OTQyL2YxYzNkMjBlZTRhNTI1MjNjNzJjZmVkNTRlYmRjYjFhLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Produk 3">
        <div class="card-body">
          <h5 class="card-title">Air Jordan 1 Retro High OG Yellow Toe</h5>
          <p class="card-text">IDR 2,800,000</p>
          <a href="produk3.php" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzExOTEvZDJmZTkyNjItNWM2MC00NmE5LWE0YTAtMzUxN2JkMjFhYmE5LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Produk 1">
        <div class="card-body">
          <h5 class="card-title">Converse Chuck Taylor All-Star 70's High Black</h5>
          <p class="card-text">IDR 850,000</p>
          <a href="produk4.php" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzMzNjgyL2IzZjI5YTdiNzU5NGI5OTJhZmUwODA1NzYzNzgzNDlhLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Produk 2">
        <div class="card-body">
          <h5 class="card-title">New Balance 530 Ivory</h5>
          <p class="card-text">IDR 1,300,000</p>
          <a href="produk5.php" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzQxMTQ4L2I1MGJkNmE5MDBhNmJkNjYyZjJhMTIxNzJlMmQ2OGZlLmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0=" alt="Produk 3">
        <div class="card-body">
          <h5 class="card-title">Nike Dunk Low Gorge Green Navy (W)</h5>
          <p class="card-text">IDR 1,600,000</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzQxMjc4LzBjODVkMWMzNDhiN2Y1MGQzYzMwOTJiMzZjYjg4OGQ3LmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0=" alt="Produk 1">
        <div class="card-body">
          <h5 class="card-title">Salomon XT-6 Black Riviera</h5>
          <p class="card-text">IDR 2,750,000</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzU4NTIwL2M2YTNlZjYzNWQ4YmE5NjUwOWE3MjgxNTg4MjY5NzY5LmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0=" alt="Produk 2">
        <div class="card-body">
          <h5 class="card-title">Vans Old Skool VR3 Black Marshmallow</h5>
          <p class="card-text">IDR 1,300,000</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzI4NDQ2LzdjNjdkYWY4YjYwMGViYzRkZTM1ZjFjODg4ZWUyNzI1LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ==" alt="Produk 3">
        <div class="card-body">
          <h5 class="card-title">Yeezy Slide Pure (2021) (Restock Pair)</h5>
          <p class="card-text">IDR 2,400,000</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
<img class="advertisement" src="https://kickavenue-assets.s3.amazonaws.com/slider-images/66e61005087bd28aa3871db1bebad713.jpeg" alt="Iklan">
<div style="background-color: black">
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: black"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
            jack Sneakers  adalah perusahaan penjualan sepatu bekas dengan koleksi trendy dari merek terkenal. Kami menawarkan sepatu berkualitas tinggi dengan harga terjangkau, serta layanan pelanggan yang baik.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">Adidas</a>
            </p>
            <p>
              <a class="text-white">Converse</a>
            </p>
            <p>
              <a class="text-white">Nike</a>
            </p>
            <p>
              <a class="text-white">New Balance</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Your Account</a>
            </p>
            <p>
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a class="text-white">Help</a>
            </p>
          </div> -->

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Kaliurang Street, Route 07 10012, YK</p>
            <p><i class="fas fa-envelope mr-3"></i> jackinfo@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> (021) - 87621562</p>
            <p><i class="fas fa-print mr-3"></i> 0895-3241-09213</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/"
                 >MDBootstrap.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>
</html>
