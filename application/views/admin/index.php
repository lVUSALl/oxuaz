<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?> 
<?php $this->load->view('admin/includes/navBar'); ?>

      
<?php $this->load->view('admin/includes/core_content'); ?>

<?php foreach($get_all_course as $item){?>
  <section class="courses1">
    <div class="container1 col-lg-4">
      <h2>Masterclass</h2>
      <p>Enrol in a masterclass and master the bording fundamentals<br>that will make you a better musician.</p>
      <div class="masterclass">
        <article class="card-masterclass">
          <div class="img-mastercover">
            <img src="<?php echo base_url('uploads/news/'.$item['n_img'])?>" width="100%" height="400px" style="object-fit: cover;" alt="Course Image">
          </div>
          <div class="card-text-area">
            <div class="card-info-top" style="display: flex; justify-content: space-between;">
              <p class="students"><?php echo $item['n_category']?></p>
              <p class="length">1h10m</p>
            </div>
            <div class="card-info-mid">
              <h3><?php echo $item['n_title']?></h3>
            </div>
            <div class="card-info-bottom">
              <p class="instructeur"><?php echo $item['c_teacher']?></p>
              <p class="pricing">Paylaşdı - <?php echo $item['a_name']?></p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
<?php } ?>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>