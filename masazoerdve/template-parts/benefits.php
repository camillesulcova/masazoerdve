<!--benefits-->
<?php
$benefit_headline = get_field("benefit_headline");
$benefit_description = get_field("benefit_description");

?>
<section id="benefits">
      <div class="container py-vh-4 w-100 overflow-hidden" style="padding-top: 5rem;">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-lg-5">
            <h2 class="py-5 border-top border-dark"><?php echo $benefit_headline; ?></h2>
          </div>
          <div class="col-md-7">
            <div class="fs-4 my-3 fw-light pt-4  pb-3">
            <?php echo $benefit_description; ?>
            </div>
          </div>
        </div>
      </div>
    
      <div class="small py-vh-3 w-100 overflow-hidden" style="padding-top: 5rem;">
        <div class="container">
          <div class="row">
                <!-- custom loop for benefits -->
                <?php
                               
                                $benefit= new WP_Query(array(
                                 'post_type' => 'benefit',
                                  'posts_per_page' => -1,
                                                          ));
                                                      ?>
                                                      
                                      <?php if($benefit->have_posts()): ?>
                                       <?php while($benefit->have_posts()): $benefit->the_post(); ?>
                                       <?php
                                  $headline_benefit_card = get_field("headline_benefit_card");
                                  $benefit_card_description = get_field("benefit_card_description");
                                  $icon = get_field("icon");
                                  ?>

            <div class="col-md-6 col-lg-4 border-end">
              <div class="py-3 text-start">                
                <img src="<?php echo $icon["url"]; ?>" class="icon" alt="<?php echo $icon; ?>">                
                <h3 class="h5 my-2"><?php echo $headline_benefit_card; ?></h3>
                <p>
                <?php echo $benefit_card_description; ?>
                </p>
              </div>
            </div>
            
            <?php endwhile ?>
            <?php  wp_reset_postdata(); ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
    <!--benefits-->

