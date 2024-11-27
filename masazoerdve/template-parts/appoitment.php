<section id="appointment" style="padding-top: 7rem;">
  <?php 
  $appointment_headline = get_field("appointment_headline");
  $appointment_cta = get_field("appointment_cta");
  $appointment_subheadline = get_field("appointment_subheadline");
  $appointment_list_1 = get_field("appointment_list_1");
  $appointment_list_2 = get_field("appointment_list_2");
  $appointment_list_3 = get_field("appointment_list_3");
  $title_modal_appointment = get_field("title_modal_appointment");
  $subtitle_modal_appointment = get_field("subtitle_modal_appointment");
  ?>
  
  <div class="container-fluid appointment py-5" >
    <div class="container pt-4">
      <div class="row g-5 align-items-start">
        <!-- Left Block -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="section-title">
            <h4 class="sub-title mb-3" style="color: var(--c-dark);" ><?php echo $appointment_headline;?></h4>
            <h2 class="display-5 mb-4"><?php echo $appointment_cta;?></h2>
            <p class="mb-4 text-muted">
              <?php echo $appointment_subheadline;?>
            </p>
            <div>
              <!-- Massage Services -->
              <div class="mb-4">
                <h5 class="mb-3" style="color: var(--c-dark);"style="font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i>Meridijaninis kūno masažas  €30 / 60 min</h5>
                <p class="text-muted mb-0">
                    <?php echo $appointment_list_1;?>
                </p>
              </div>
              <div class="mb-4">
                <h5 class="mb-3" style="color: var(--c-dark);" style="font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i>Klasikinis kūno masažas  €20 / 60 min</h5>
                <p class="text-muted mb-0">
                    <?php echo $appointment_list_2;?>
                </p>
              </div>
              <div class="mb-4">
                <h5 class="mb-3" style="color: var(--c-dark);" style="font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i>Pėdų masažas  €30 / 60 min</h5>
                <p class="text-muted mb-0" >
                    <?php echo $appointment_list_3;?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Block -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
          <div class="appointment-form p-5 shadow" style="background-color: var(--c-light); box-shadow: 0px 4px 10px var(--c-pink);">
            <h3 class="fs-4 text-uppercase mb-4" style="color: var(--c-dark);"><?php echo $title_modal_appointment; ?></h3>
            <h1 class="display-5 mb-4" style="color: var(--c-dark);"><?php echo $subtitle_modal_appointment; ?></h1>
            <!-- Insert the Contact Form 7 shortcode -->
            <?php echo do_shortcode('[contact-form-7 id="a78dfea" title="Book appoiment form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>