<section id="massages">
  <div class="py-vh-5 w-100 overflow-hidden" id="services">
    <div class="container">

      <!-- Section Heading -->
      <div class="row d-flex justify-content-end" style="padding-top: 7rem;">
        <div class="col-lg-10 offset-lg-2 d-flex justify-content-end">
          <h3 class="display-6" style="max-width: 800px; margin-left: auto;">
            <?php echo $heading_massage; ?>
          </h3>
        </div>
      </div>

      <!-- Massage Tab Section -->
      <div class="container my-5">
        <nav>
          <!-- Tab Buttons -->
          <div class="nav nav-tabs justify-content-left" id="nav-tab" role="tablist">
            <?php
            $isFirst = true;
            $massage_query = new WP_Query(array(
              'post_type' => 'massage',
              'posts_per_page' => -1,
            ));

            if ($massage_query->have_posts()): 
              $tab_index = 1; // Start with the first tab
              while ($massage_query->have_posts()): $massage_query->the_post(); 
                $massage_type = get_field("massage_type");
                ?>
                <?php $button_text = get_field("button_text"); ?>
                <button class="nav-link <?php echo $isFirst ? 'active' : ''; ?>" 
                  id="nav-massage<?php echo $tab_index; ?>-tab" 
                  data-bs-toggle="tab" 
                  data-bs-target="#nav-massage<?php echo $tab_index; ?>" 
                  type="button" 
                  aria-controls="nav-massage<?php echo $tab_index; ?>" 
                  aria-selected="<?php echo $isFirst ? 'true' : 'false'; ?>" 
                  role="tab">
                  <?php echo $button_text; ?>
                </button>
                <?php 
                $isFirst = false; 
                $tab_index++; // Increment tab index for next tab
              endwhile; 
              wp_reset_postdata(); 
            endif; 
            ?>
          </div>
        </nav>

        <!-- Tab Content -->
        <div class="tab-content" id="nav-tabContent">
          <?php
          $isFirst = true; // Reset for the tab content
          $massage_query = new WP_Query(array(
            'post_type' => 'massage',
            'posts_per_page' => -1,
          ));

          if ($massage_query->have_posts()): 
            $tab_index = 1; // Start with the first tab-pane
            while ($massage_query->have_posts()): $massage_query->the_post(); 
              $massage_description = get_field("massage_description");
              $massage_cta = get_field("massage_cta");
              $card_image = get_field("card_image");
              $massage_type = get_field("massage_type");
             
              ?>
              <div class="tab-pane fade <?php echo $isFirst ? 'show active' : ''; ?>" 
                id="nav-massage<?php echo $tab_index; ?>" 
                role="tabpanel" 
                aria-labelledby="nav-massage<?php echo $tab_index; ?>-tab">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <span class="h5 fw-lighter"><?php echo $tab_index; ?>.</span>
                    <h4 class="py-4 border-top border-dark"><?php echo $massage_type; ?></h4>
                    <p><?php echo $massage_description; ?></p>
                    <p><?php echo $massage_cta; ?></p>
                  </div>
                  <div class="col-md-6" style="padding-top: 5rem;">
                    <img src="<?php echo $card_image["url"]; ?>" class="d-block w-100 massages-img" alt="<?php echo $massage_type; ?>">
                  </div>
                </div>
              </div>
              <?php 
              $isFirst = false; 
              $tab_index++; // Increment tab index for next tab
            endwhile; 
            wp_reset_postdata(); 
          endif; 
          ?>
        </div>

      </div>
    </div>
  </div>
</section>
