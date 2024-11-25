<section id="about">
                <?php
                  $image_top= get_field("image_top");
                  $image_left = get_field("image_left");
                  $image_right = get_field("image_right");
                  $headline_about = get_field ("headline_about");
                  $paragraph_one = get_field ("paragraph_one");
                  $paragraph_two = get_field ("paragraph_two");
                  $list_paragraph = get_field ("list_paragraph");
                ?>
      <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus" style="padding: 3rem; background-color: rgb(243, 243, 243);">
        <div class="container">
          <div class="row d-flex justify-content-between align-items-center">
            <!-- Image Section -->
            <div class="col-lg-5">
              <div class="row gx-4 d-flex">
                <div class="col-md-12">
                  <div class="shadow ratio ratio-16x9  bg-cover bp-center align-self-end" data-aos="fade-right"
                    style="background-image: url(<?php echo $image_top["url"]; ?>);--bs-aspect-ratio: 50%; background-size: contain;">
                  </div>
                </div>
                <div class="col-md-5 offset-md-1">
                  <div class="shadow ratio ratio-1x1  bg-cover mt-4 bp-center float-end" data-aos="fade-up"
                    style="background-image: url(<?php echo $image_right["url"]; ?>); background-size: contain;">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-12 shadow ratio  bg-cover mt-4 bp-center" data-aos="fade-left"
                    style="background-image: url(<?php echo $image_left["url"]; ?>);--bs-aspect-ratio: 150%; background-size: contain;">
                  </div>
                </div>
              </div>
            </div>
            <!-- Text Section -->
             <br>
            <div class="col-lg-6" style="padding-top: 5rem;">
              <h2><?php echo $headline_about; ?></h2>
              <p class="py-2 border-top border-dark" data-aos="fade-left">
              <?php echo $paragraph_one; ?>
              </p>
              <p data-aos="fade-left" data-aos-delay="300">
              <?php echo $paragraph_two; ?>
              </p>
            
              <ul data-aos="fade-left" data-aos-delay="300">
              <?php echo $list_paragraph; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>