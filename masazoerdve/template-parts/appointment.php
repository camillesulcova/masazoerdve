
<?php 
  $appointment_headline = get_field("appointment_headline");
  $appointment_cta = get_field("appointment_cta");
  $appointment_subheadline = get_field("appointment_subheadline");
  $appointment_list_1 = get_field("appointment_list_1");
  $appointment_list_2 = get_field("appointment_list_2");
  $appointment_list_3 = get_field("appointment_list_3");
  $title_modal_appointment = get_field("title_modal_appointment");
  $subtitle_modal_appointment = get_field("subtitle_modal_appointment");
  $list_headline_1 = get_field("list_headline_1");
  $list_headline_2 = get_field("list_headline_2");
  $list_headline_3 = get_field("list_headline_3");
  $coupon_pic = get_field("coupon_pic");
  $hero_btn = get_field("hero_btn");
 
  ?>


<section id="appointment" style="padding-top: 7rem padding-bottom: 7rem;">   
  <div class="container-fluid appointment py-5">
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
                <h5 class="mb-3" style="color: var(--c-dark); font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i><?php echo $list_headline_1;?></h5>
                <p class="text-muted mb-0">
                    <?php echo $appointment_list_1;?>
                </p>
              </div>
              <div class="mb-4">
                <h5 class="mb-3" style="color: var(--c-dark); font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i><?php echo $list_headline_2;?></h5>
                <p class="text-muted mb-0">
                    <?php echo $appointment_list_2;?>
                </p>
              </div>
              <div class="mb-4">
                <h5 class="mb-3" style="color: var(--c-dark); font-weight: bold;"><i class="fa fa-check me-2" style="color: var(--c-pink);"></i><?php echo $list_headline_3;?></h5>
                <p class="text-muted mb-0" >
                    <?php echo $appointment_list_3;?>
                </p>
              </div>
              <br>
              <button type="button" class="btn btn-contact-me btn-lg" data-toggle="modal" 
                data-target="#bookAppointmentModal"><?php echo $hero_btn ?>
              </button>
            </div>
          </div>
        </div>

        <!-- Right Block -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
          <div class="col-md-6" style="padding-top: 5rem;">
            <img src="<?php echo $coupon_pic["sizes"]["large"]; ?>" class="cupon_pic" alt="<?php echo $coupon_pic; ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>