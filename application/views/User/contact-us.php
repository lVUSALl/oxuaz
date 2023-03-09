<?php $this->load->view('User/includes/HeaderStyle') ?>

  <!-- ***** Header Area Start ***** -->
  <?php $this->load->view('User/includes/NavbarStyle') ?>
  <!-- ***** Header Area End ***** -->

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>Oxu.Az-a Salam De</h4>
            <h1>Bizimlə Əlaqə</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>Əlavə Məlumat</h6>
            <h4><em>Bizimlə Əlaqə Üçün</em> Daha Çox Oxu </h4>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit sit praesentium enim vero delectus accusantium saepe explicabo<br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vel amet, omnis ad aperiam voluptatum minus aliquam deserunt quia eos praesentium.</p>
          <ul>
            <li>- Selfies you probably haven't heard of them.</li>
            <li>- Tousled cold-pressed chicharrones yuccie.</li>
            <li>- Pabst iPhone chartreuse shabby chic tumeric.</li>
            <li>- Scenester normcore mumblecore snackwave.</li>
          </ul>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">125</div>
                <div class="count-title">Tamamlanmış İşlər</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">11</div>
                <div class="count-title">İllik Təcrübə</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">87</div>
                <div class="count-title">Xoşbəxt Müştərilər</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">24</div>
                <div class="count-title">Qazanılmış Hədiyyələr</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.7652423137713!2d49.827561035544!3d40.385341316112054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9bdc74118b%3A0xc8377414faa8f86b!2sSTIMUL%20Education%20%26%20Consulting!5e0!3m2!1saz!2saz!4v1678386866326!5m2!1saz!2saz" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <a href="tel:+994 12 497 75 37" style="text-decoration:none;color: black;">
                    <div class="icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <h4>Telefon</h4>
                    <span>+994 12 497 75 37</span>
                  </a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <a href="tel:+994 50 661 01 17" style="text-decoration:none;color: black;">
                    <div class="icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <h4>Mobil</h4>
                    <span>+994 50 661 01 17</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Bizimlə Əlaqə</h6>
                  <h4><em>Fikrini</em> Bildir</h4>
                  <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <?php $this->load->view('User/includes/FooterStyle'); ?>