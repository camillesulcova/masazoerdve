<?php              
      $background_image = get_field("background_image");
      $hero_title = get_field("hero_title");
      $hero_text = get_field("hero_text");
      $hero_btn = get_field("hero_btn");              
      ?>


    <section id="hero">
      <div class="container">
        <div class="container position-relative">
          <div class="hero-image col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
            style="background-image: url(<?php echo $background_image["url"] ?>); background-size: contain;"></div>
           
          <div class="row"> 
            <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
              <h1 class="display-1 fw-bold mt-5" style="line-height: 1.2;"><?php echo $hero_title ?></h1>
              <p class="lead"><?php echo $hero_text ?></p>
              <!--modal button, change btn-primary for something in our css to personalize-->
              <button type="button" class="btn btn-contact-me btn-lg" data-toggle="modal" 
                data-target="#bookAppointmentModal"><?php echo $hero_btn ?></button>
            </div>
          </div>
        </div>

      </div>