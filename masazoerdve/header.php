<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
</head>
    

<body data-bs-spy="scroll" data-bs-target="#navScroll">
<?php
                  $location_cta= get_field("location_cta")
                  $phone_number = get_field("phone_number");
                  $email = get_field("email");
                  $facebook = get_field ("facebook");
                  $instagram = get_field ("instagram");
                ?>
  <!-- Topbar Start -->
<div class="container-fluid topbar px-5 d-none d-lg-block">
  <div class="container">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="#" class="text-light no-underline me-4"><i class="fas fa-map-marker-alt  me-2"></i><?php echo $location_cta; ?></a>
                <a href="#" class="text-light no-underline me-4"><i class="fas fa-phone-alt  me-2"></i><?php echo $phone_number; ?></a>
                <a href="#" class="text-light no-underline me-0"><i class="fas fa-envelope  me-2"></i><?php echo $email; ?></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
                <a href="<?php echo $facebook; ?>" class="btn btn-light btn-square border rounded-circle nav-fill me-3 btn-sm"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo $instagram; ?>" class="btn btn-light btn-square border rounded-circle nav-fill btn-sm"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
      </div>
  </div>
</div>
<!-- Topbar End -->


  <!-- Navbar & Hero Start -->
  <div class="container position-relative p-0">

    <!--nav-->
    <section id="navigation">
      <nav class="navbar navbar-expand-lg navbar-light px-3 px-0 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
          <h1 class="text-success m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1>
          <!-- <img src="img/logo.png" alt="Logo">
        ???? logo???? -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#massages" class="nav-item nav-link">Services</a>
            <a href="#appoitment" class="nav-item nav-link">Contact Us</a>
          </div>
          <a href="#appoitment" class="btn btn-book-appointment">Book Appointment</a>
        </div>
      </nav>
    </section>
    <!--nav-->
