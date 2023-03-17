<?php $this->load->view('User/includes/HeaderStyle'); ?>
  <!-- ***** Header Area Start ***** -->
<?php $this->load->view('User/includes/NbarStyle'); ?>
  <!-- ***** Header Area End ***** -->

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>Biz Nə Edirik ?</h4>
            <h1>Kurslarımız</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="col-lg-12" style="width: 100%; float: left; display: grid; grid-template-columns: auto auto auto;">
    <?php foreach($get_all_course as $item){?>
      <section class="courses1" id="course-items">
        <div class="container1 col-lg-12">

          <div class="masterclass">
            <article class="card-masterclass col-lg-3">
              <div class="img-mastercover">
                <img src="<?php echo base_url('uploads/news/'.$item['n_img']) ?>" width="100%" height="225px" style="object-fit: cover;" alt="Course Image">
              </div>
              <div class="card-text-area col-lg-4">
                <div class="card-info-top" style="display: flex; justify-content: space-between;">
                 <p style="color: white;" class="col-lg-3"><?php echo $item['n_category'] ?></p>
                 <p style="color: white;" class="col-lg-3"><?php echo $item['c_time'] ?></p>
                </div>
                <div class="card-info-mid wrappers">
                 <h3><?php echo $item['n_title']?></h3>
                  <h3 class="shorten"><?php echo $item['n_description'] ?>
                  <br>
                  <br>
                    <a href="<?php echo base_url('course_detail/'.$item['n_id']) ?>">
                      <button class="lookbtn">Davamına Bax</button>
                    </a>
                    
                 </h3>
                </div>
                <div class="card-info-bottom col-lg-12">
                 <p style="color: white;" class="col-lg-12">Müəllim : <?php echo $item['c_teacher'] ?></p>
                 <!-- <p class="col-lg-6">Paylaşdı : <?php echo $item['a_name']?></p> -->
               </div>
              </div>
            </article>
          </div>
        </div>
      </section>
    <?php } ?>
  </div>

    <div>
      <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Bizim Xidmətimiz</h6>
            <h4>Göstərilən <em>Xidmətlər</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/user/'); ?>assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Faydalı Hiylələr</h4>
                <p style="color: gray;">Həyata və karyeranıza dair vacib "hiylələr"</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/user/'); ?>assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Kreativ İdealar</h4>
                <p style="color: gray;">Gələcəyini düzgün planlamaq üçün sənə lazım olacaq düzgün düşüncə tərzi</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/user/'); ?>assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Hazır Hədəf</h4>
                <p style="color: gray;">Sizin hədəfinizə çatmaq üçün uğura gedən yolda işıq olmaq</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/user/'); ?>assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Texnologiya</h4>
                <p style="color: gray;">Arzunuzu reallaşdırma üçün istifadə olunacaq real və müasir texnologiya toplusu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    </div>
  <!-- <section class="simple-cta ">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="<?php echo base_url('assets/User/'); ?>assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Endirimi Qaçırmayın!</h6>
          <h4>1-dən çox kurs üçün 50%-ə dək endirim</h4>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, molestiae et nobis atque nesciunt harum corporis commodi quaerat dignissimos provident ea, ut magni asperiores nemo quasi, dolorem iste aspernatur cupiditate.</p>
          <div class="white-button">
            <a href="<?php echo base_url('services')?>">Kurslara Bax</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="featured-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Featured Service</h6>
            <h4>Best Of Our <em>Product</em></h4>
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="left-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/User/'); ?>assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p style="color: gray;">Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="<?php echo base_url('assets/User/'); ?>assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p style="color: gray;">Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-image">
            <img src="<?php echo base_url('assets/User/'); ?>assets/images/featured-product.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="right-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="<?php echo base_url('assets/User/'); ?>assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p style="color: gray;">Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="<?php echo base_url('assets/User/'); ?>assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p style="color: gray;">Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-info">
            <div class="section-heading">
              <h6>Our Office</h6>
              <h4>Get closer to <em>EduWell</em></h4>
            </div>
            <p style="color: gray;">Trust fund nocore broklyn humblebrag mustache
              pork kitsch, bicycle rights hexagon schlitz keytar palo is
              santo drinking vinegar fam ramps. <br><br>Four dollar toast and
              edison bulb vinyl, listicle hashtag pug scenester typewrit
              er yuccie street artboard or whatever to fill place.</p>
            <ul>
              <li>- Selfies you probably haven't heard of them.</li>
              <li>- Tousled cold-pressed chicharrones yuccie.</li>
              <li>- Pabst iPhone chartreuse shabby chic tumeric.</li>
              <li>- Scenester normcore mumblecore snackwave.</li>
            </ul>
            <div class="main-button-gradient">
              <a href="our-services.html">Our Services</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="video">
            <div class="thumb">
              <img src="<?php echo base_url('assets/User/'); ?>assets/images/video-thumb.jpg" alt="">
              <div class="play-button">
                <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
<?php $this->load->view('User/includes/FooterStyle'); ?>