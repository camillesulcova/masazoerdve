    <!-- Footer Start -->
<section id="footer">
  <div class="container-fluid footer py-5" data-wow-delay="0.2s">
    <div class="container py-5">
      <div class="row g-5 justify-content-center text-center">
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="text-black mb-4"><i class="fas fa-star-of-life me-3"></i>Terapia</h4>
            <p> All rights reserved © 2024 Masažo erdvė</p>
            
            <!-- Centered Social Media Section -->
            <div class="social-icons d-flex justify-content-center align-items-center mt-4">
              <!-- Share Icon -->
              <i class="fas fa-share fa-2x me-3" style=" color: var(--c-purple);"></i>

              <!-- Social Media Icons -->
              <a class="btn-square btn text-white rounded-circle mx-1" href="https://www.facebook.com/kucinaitevelicke"
                 style=" background-color: var(--c-purple); display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a class="btn-square btn text-white rounded-circle mx-1" href="https://www.instagram.com/kucinaitevelicke/?igsh=anYzc2psbHc5OGdz"
                 style=" background-color: var(--c-purple); display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Other sections remain unchanged -->
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="mb-4 text-black">Quick Links</h4>
            <a href="#about"><i class="fas fa-angle-right me-2"></i> About Us</a>
            <a href="#appointment"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
            <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="mb-4 text-black">Terapia Services</h4>
            <a href="#massages"><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
            <a href="#massages"><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
            <a href="#massages"><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="mb-4 text-black">Contact Info</h4>
            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
            <a href=""><i class="fas fa-envelope me-2"></i>rita.masazoerdve@gmail.com</a>
            <a href=""><i class="fas fa-phone me-2"></i>+37060715022</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <?php wp_footer() ?>
    </body>
</html>
