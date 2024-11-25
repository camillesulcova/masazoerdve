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
                <svg xmlns="<?php echo $icon; ?>" width="42" height="42" fill="currentColor" class="bi bi-box-seam mb-3" viewbox="0 0 16 16">
                  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg>
                <h3 class="h5 my-2"><?php echo $headline_benefit_card; ?></h3>
                <p>
                <?php echo $benefit_card_description; ?>
                </p>
              </div>
            </div>
            
            <?php endwhile ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
    <!--benefits-->

