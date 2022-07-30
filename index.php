<?php
require_once("config/func.php");

session_start();

// if not logged in, go to login page
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
  newLocation("login.php");
  exit;
}

require_once("config/setting.php");
require_once("config/dbSetup.php");
?>

<!doctype html>
<html lang="en">

<head>
<title>Cycle Rental User Management</title>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/img/favicon.png" rel="icon">
  
 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
 

  <section id="hero">
    <div class="hero-container">
      <a href="index.php" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt="" style="border-radius: 30%;"></a>
      <h1 data-aos="zoom-in">Welcome To Fantastic Four</h1>
      <h2 data-aos="fade-up">We are team of talented Web Developerts making professional websites </h2>
      <a  href="teamMembers/members.php" class="btn-get-started scrollto" style="width: 50%;">Team Information</a>
      <a href="crudimage/index.php" class="btn-get-started scrollto" style="width: 50%;">Project- Cycle Rental User Management</a>
      <a  href="logout.php" class="btn-get-started scrollto" style="width: 50%;">Logout</a>
      
    </div>
  </section>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>