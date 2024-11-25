<br>
<?php
$heading_massage = get_field("heading_massage");

?>
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
                <button class="nav-link active" id="nav-massage1-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-massage1" type="button" aria-controls="nav-massage1" aria-selected="true"
                  role="tab">Meridianinis masažas</button>
                <button class="nav-link" id="nav-massage2-tab" data-bs-toggle="tab" data-bs-target="#nav-massage2"
                  type="button" aria-controls="nav-massage2" aria-selected="false" role="tab">Klasikinis masažas</button>
                <button class="nav-link" id="nav-massage3-tab" data-bs-toggle="tab" data-bs-target="#nav-massage3"
                  type="button" aria-controls="nav-massage3" aria-selected="false" role="tab">Pėdų masažas</button>
              </div>
            </nav>

            <!-- Tab Content -->
            <!-- Custom loop for massages types -->
            <div class="tab-content" id="nav-tabContent">
        
                
                <div class="row">
                    <?php
                    $isFirst = true;
                    $massage= new WP_Query(array(
                        'post_type' => 'massage',
                        'posts_per_page' => -1,
                                                ));
                    ?>
                                            
                    <?php if($massage->have_posts()): ?>
                        <?php while($massage->have_posts()): $massage->the_post(); ?>
                            <?php
                            $number = get_field("number");
                            $massage_description = get_field("massage_description");
                            $massage_cta = get_field("massage_cta");
                            $card_image = get_field("card_image");
                            $massage_type = get_field("massage_type");
                            ?>
                            <div class="tab-pane fade show <?php $isFirst ? "active" : "" ?>" id="nav-massage1" role="tabpanel" aria-labelledby="nav-massage1-tab">
                                <div class="col-md-6 col-lg-6">
                                    <span class="h5 fw-lighter">  <?php echo $number; ?></span>
                                    <h4 class="py-4 border-top border-dark"><?php echo $massage_type; ?></h4>
                                    <p><?php echo $massage_description; ?> </p>
                                    <p><?php echo $massage_cta; ?></p>


                                </div>
                                <div class="col-md-6" style="padding-top: 5rem;">
                                    <img src="<?php echo $card_image["url"] ?>" class="d-block w-100 massages-img" alt="Massage 1">
                                </div>
                            </div>
                        <?php $isFirst = false; ?>
                        <?php endwhile ?>
                    <?php endif ?>
                    <?php wp_reset_postdata() ?>
                </div>

             
            
            </div>
          </div>
    </div>

    </section>