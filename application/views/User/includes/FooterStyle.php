<div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/Stimul.edu.az#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/lVUSALl"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/vusal-gasimov-ba0775229/"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://www.github.com/lVUSALl"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.instagram.com/_vus_al"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.stimul.edu.az"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2023 Oxu.Az Co., Ltd. Bütün Hüquqlar Qorunur. 
          
          <br>Developer: <a href="#" target="_blank">lVUSALl</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/User/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url('assets/User/'); ?>assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/lightbox.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/tabs.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/video.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/slick-slider.js"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="<?php echo base_url('assets/User/'); ?>assets/js/auto-type-index.js"></script>
    
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>