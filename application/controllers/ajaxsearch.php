<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ajaxsearch extends CI_Controller {
    function index () {
        $this->load->view('ajaxsearch');
    }

    function fetch() {
        $output = '';
        $query = '';
        $this->load->model('ajaxsearch_model');
        if($this->input->post('query'));
    }
    $data = $this->ajaxsearch_model->fetch_data($query);
    $output .= '
    <section class="courses1" id="course-items">
    <div class="container1 col-lg-2">

      <div class="masterclass">
        <article class="card-masterclass col-lg-3">
          <div class="img-mastercover">
            <img src="<?php echo base_url('uploads/news/'.$item['n_img'])?>" width="100%" height="225px" style="object-fit: cover;" alt="Course Image">
          </div>
          <div class="card-text-area col-lg-4">
            <div class="card-info-top" style="display: flex; justify-content: space-between;">
              <p class="col-lg-3"><?php echo $item['n_category']?></p>
              <p class="col-lg-3"><?php echo $item['c_time']?></p>
            </div>
            <div class="card-info-mid wrappers">
              <h3><?php echo $item['n_title']?></h3>
              <h3 class="shorten"><?php echo $item['n_description']?>
              <br>
              <br>
                <a href="<?php echo base_url('admin_news_detail/'.$item['n_id'])?>">
                  <button class="lookbtn">Davamına Bax</button>
                </a>
              </h3>
            </div>
            <div class="card-info-bottom col-lg-12">
              <p class="col-lg-12">Müəllim : <?php echo $item['c_teacher']?></p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
    ';
    if ($data->num_rows() > 0) {
        foreach($data->result()) {
            $output .= '<section class="courses1" id="course-items">
            <div class="container1 col-lg-2">
        
              <div class="masterclass">
                <article class="card-masterclass col-lg-3">
                  <div class="img-mastercover">
                    <img src="<?php echo base_url('uploads/news/'.$item['n_img'])?>" width="100%" height="225px" style="object-fit: cover;" alt="Course Image">
                  </div>
                  <div class="card-text-area col-lg-4">
                    <div class="card-info-top" style="display: flex; justify-content: space-between;">
                      <p class="col-lg-3"><?php echo $item['n_category']?></p>
                      <p class="col-lg-3"><?php echo $item['c_time']?></p>
                    </div>
                    <div class="card-info-mid wrappers">
                      <h3><?php echo $item['n_title']?></h3>
                      <h3 class="shorten"><?php echo $item['n_description']?>
                      <br>
                      <br>
                        <a href="<?php echo base_url('admin_news_detail/'.$item['n_id'])?>">
                          <button class="lookbtn">Davamına Bax</button>
                        </a>
                      </h3>
                    </div>
                    <div class="card-info-bottom col-lg-12">
                      <p class="col-lg-12">Müəllim : <?php echo $item['c_teacher']?></p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </section>';
        }
    } else {
        $output .= ' Belə Məlumat Yoxdur. Zəhmət olmasa başqa cür axtarın ! ';

    }
    echo $output;
}
?>