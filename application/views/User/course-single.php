<?php $this->load->view('user/includes/HeaderStyle'); ?>
<?php $this->load->view('user/includes/NbarStyle'); ?>

<!-- Page Content -->

<section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Oxu.az</span>
              <h4>Hər zaman sizinlə !</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="blog-posts grid-system">
  <div class="container featured-product">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="<?php echo base_url('uploads/news/'.$single_course['n_img']); ?>" width="100%" height="425px" style="object-fit: cover;" alt="Course Image">
                </div>
                <div class="down-content">
                  <span><?php echo $single_course['n_category']; ?></span>
                  <h4><?php echo $single_course['n_title']; ?></h4>
                  <ul class="post-info">
                    <li><?php echo date("d M Y", strtotime($single_course['n_date'])); ?></li>
                  </ul>
                  <p style="color: black;"><?php echo $single_course['n_description']; ?></p>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">

            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent Posts</h2>
                </div>
                <div class="content">
                  <ul>
                    <?php foreach ($get_5_course as $item) { ?>
                      <li>
                        <a href="<?php echo base_url('single/'.$item['n_id']); ?>">
                          <h5><?php echo $item['n_title']; ?></h5>
                          <span><?php echo date("d M Y", strtotime($item['n_date'])); ?></span>
                        </a>
                      </li>
                    <?php } ?>


                  </ul>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Categories</h2>
                </div>
                <div class="content">
                  <ul>
                    <?php foreach ($get_all_categories as $item) { ?>
                      <li><a href="<?php echo base_url('category/'.$item['c_name']); ?>"><?php echo $item['c_name']; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
<div class="contact-info">

<?php $this->load->view('user/includes/FooterStyle'); ?>