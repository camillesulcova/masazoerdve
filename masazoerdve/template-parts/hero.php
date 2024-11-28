<?php              
      $background_image = get_field("background_image");
      $hero_title = get_field("hero_title");
      $hero_text = get_field("hero_text");
      $hero_btn = get_field("hero_btn");
      $title_contact_modal = get_field("title_contact_modal");             
      ?>


    <section id="hero">
      <div class="container">
        <div class="container position-relative">
          <div class="hero-image col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
            style="background-image: url(<?php echo $background_image["url"] ?>); background-size: contain;"></div>
           
          <div class="row"> 
            <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
              <h1 class="display-1 mt-5" style="line-height: 1.2;"><?php echo $hero_title ?></h1>
              <br>
              <p class="lead"><?php echo $hero_text ?></p>
              <br>
              <!--modal button, change btn-primary for something in our css to personalize-->
              <button type="button" class="btn btn-contact-me btn-lg" data-toggle="modal" 
                data-target="#bookAppointmentModal"><?php echo $hero_btn ?>
              </button>
            </div>
          </div>
        </div>

      </div>


      <!-- Modal -->
      <div class="modal fade" id="bookAppointmentModal" tabindex="-1" role="dialog" 
        aria-labelledby="bookAppointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="bookAppointmentModalLabel"><?php echo $title_contact_modal ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Shortcode -->
              <?php echo do_shortcode('[contact-form-7 id="e0e33fa" title="Contact me form"]'); ?>
            </div>
          </div>
        </div>
      </div>