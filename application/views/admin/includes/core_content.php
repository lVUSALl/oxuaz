
<div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <div class="col-lg-12 mb-4 order-0">
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <?php
                        $admin = $this->db
                        ->select('a_name')
                        ->where('a_id',$_SESSION['admin_login_id'])
                        ->get('admin')->row_array();
                      ?>
                      <h5 class="card-title text-primary"><?php echo $admin['a_name']; ?>, Xoş Gəldin! 🎉</h5>
                      
                      <p class="mb-4">
                        <i class="fas fa-quote-left fa-2x" style="color: #696CFF;"></i>
                        <blockquote class="blockquote pb-2">
                          <p style="color: black;">Həyatda hər hansı bir yerə çatacaqsınızsa, bir çox kitab oxumalısınız.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0">Roald Dahl</figcaption>
                      </p>
                    
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img src="<?php echo base_url("assets/admin/"); ?>assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-one">
              <button class="col-lg-2 csd" style="float: right" >
                <a href="<?php echo base_url("admin_news"); ?>" class="menu-link">
                       <i class="menu-icon tf-icons bx bx-crown"></i>
                       <div data-i18n="Boxicons">Kursları Yenilə</div>
                </a>
             </button><br>

              <i class="col-lg-12 tf-icons bx bx-book-open" style="color: #696CFF; font-size: 50px!important; display: flex; justify-content: center; align-items: center;"></i><br>
              <div class="col-lg-4" style="font-size:42px; color: #696CFF; display: flex; justify-content: center; align-items: center; width: 100%;">Bütün Kurslar :</div>
          </div>
          <div id="result"></div>
          
</div>