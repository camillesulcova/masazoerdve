<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

    

<body data-bs-spy="scroll" data-bs-target="#navScroll">
<?php
                  $location_cta= get_field("location_cta");
                  $phone_number = get_field("phone_number");
                  $email = get_field("email");
                  $facebook = get_field ("facebook");
                  $instagram = get_field ("instagram");
                  $logo = get_field ("logo");
                ?>
  <!-- Topbar Start -->
<div class="container-fluid topbar px-5 d-none d-lg-block">
  <div class="container">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="https://www.google.com/maps/place/Vilniaus+g.+105,+Raseiniai,+60171+Raseini%C5%B3+r.+sav.,+Litva/@55.3802693,23.1092247,487m/data=!3m2!1e3!4b1!4m6!3m5!1s0x46e686f013b9e5d7:0xd8c50581305838ba!8m2!3d55.3802663!4d23.1117996!16s%2Fg%2F11csjjgh0s!5m1!1e3?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D" class="text-light no-underline me-4"><i class="fas fa-map-marker-alt  me-2"></i><?php echo $location_cta; ?></a>
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
        <a href="#navigation" class="navbar-brand p-0">
          <!--<h1 class="text-success m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1>-->
          <img src="<?php echo $logo["url"]; ?>" class="logo" alt="<?php echo $logo; ?>">
          <!-- <img src="img/logo.png" alt="Logo">
        ???? logo???? -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="#hero" class="nav-item nav-link active">Pagrindinis</a>
            <a href="#about" class="nav-item nav-link">Apie</a>
            <a href="#massages" class="nav-item nav-link">Masažai</a>
            <a href="#appointment" class="nav-item nav-link">Kontaktai</a>
          </div>
          <a href="#appointment" class="btn btn-book-appointment">Užsakyti masažą</a>
        </div>
      </nav>
    </section>
    <!--nav-->
