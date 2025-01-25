  <!-- Instagram -->
  <?php
    $pic_1 = get_field("pic_1");
    $pic_2 = get_field("pic_2");
    $pic_3 = get_field("pic_3");
    $pic_4 = get_field("pic_4");
    $button_link = get_field("button_link");
    ?>
  <section id="instagram" style="padding-top: 4rem; padding-bottom: 2rem;">
  <div class="instagram-wrapper">
    <h2 class="instagram-heading">Check Us on Instagram!</h2> <!-- Centered Heading -->
    <div class="container-fluid px-0">
      <div class="row g-0">
        <div class="col-lg-3 col-md-6">
          <div class="lc-block">
            <a href="https://www.instagram.com/kucinaitevelicke/?igsh=anYzc2psbHc5OGdz">
              <img class="img-fluid" loading="lazy" alt="Photo by Ishan @seefromthesky"
                src="<?php echo $pic_1["url"]; ?>">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="lc-block">
          <a href="https://www.instagram.com/kucinaitevelicke/?igsh=anYzc2psbHc5OGdz" target="_blank">
              <img class="img-fluid" loading="lazy" alt="Photo by Mathyas Kurmann"
              src="<?php echo $pic_2["url"]; ?>">
              </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="lc-block">
            <a href="https://www.instagram.com/kucinaitevelicke/?igsh=anYzc2psbHc5OGdz" target="_blank">
              <img class="img-fluid" loading="lazy" alt="Photo by Reinis Birznieks"
              src="<?php echo $pic_3["url"]; ?>">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="lc-block">
            <a href="https://www.instagram.com/kucinaitevelicke/?igsh=anYzc2psbHc5OGdz" target="_blank">
              <img class="img-fluid" loading="lazy" alt="Photo by Ishan @seefromthesky"
              src="<?php echo $pic_4["url"]; ?>">
            </a>
          </div>
        </div>
      </div><!-- /row -->
    </div><!-- /container-fluid -->
  </div><!-- /instagram-wrapper -->
</section>
<!-- Instagram End -->

