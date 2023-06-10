<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit;
}

$username = $_SESSION['user'];

// Bazadan foydalanuvchi ma'lumotlarini olish
// ...

// echo "Foydalanuvchi: " . $username;
// Boshqa ma'lumotlarni ham chiqaring

// Chiqish linkini qo'shish
// echo '<a href="index.html">Chiqish</a>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fs-3" href="#"><i class="fa fa-graduation-cap"></i> Online Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end align-items-center fw-bold" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item mt-5">
        <n type="button" class="fs-5 mx-2 align-items-center"><?php echo "Xush kelibsiz: " . $username;?> </n>
        </li>
        <li class="nav-item">
            <a href="./index.html">
        <button type="button" class="btn btn-dark">Chiqish</button></a>
        </li>




      </ul>
    </div>
  </div>
</nav>


<div class="scrollToTop-btn">
    <i class="fas fa-angle-up"></i>
  </div>



  <!-- services -->
  <section class="services" id="services">
    <div class="title reveal">
      <div class="section-title">
        Kurslar
      </div>
    </div>
    <a href="./course/webdes.html">
    <div class="content">
    <div class="card reveal">
      <div class="service-icon">
        <i class="fas fa-palette"></i>
      </div>

      <div class="info">
        <h3>Web dizayn</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, itaque!</p>
      </div></div></a>
      <a href="./course/webde.html">
      <div class="card reveal">
      <div class="service-icon">
        <i class="fas fa-file-code"></i>
      </div>
      <div class="info">
        <h3>Web Dasturlash</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, itaque!</p>
      </div>
    </div>
    <a href="./course/mobil.html" class="text">
      <div class="card reveal">
      <div class="service-icon">
        <i class="fa fa-mobile" aria-hidden="true"></i>
      </div>
      <div class="info">
        <h3>Mobil Dasturlash</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, itaque!</p>
      </div>
    </div></a>
    
    </div>
  </section>
  <!-- /services -->

  <!-- footer-->
  <footer class="footer">
    <span class="footer-title">Dasturlash Akademiyasi</span>
    <div class="media-icons">
      <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div>
    <p>Copyright @2021. All Rights Reserved.</p>
  </footer>
  <!-- footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>