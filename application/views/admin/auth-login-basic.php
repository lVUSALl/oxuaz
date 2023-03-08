<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo base_url('assets/admin/'); ?>assets/" data-template=" vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Oxu.az | Login Page</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/admin/'); ?>assets/img/favicon/favicon.ico" type="image/x-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/css/demo.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/css/lldf.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo base_url('assets/admin/'); ?>assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="<?php echo base_url('index') ?>" class="app-brand-link gap-2">
                <img class="mb-12" style="width: 100px; height: 90px;" src="<?php echo base_url('assets/admin/'); ?>assets/img/elements/oxuaz_logo.png" alt="Logo">
                <span class="lg-12 lld">Oxu.Az</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Oxu.az Admini Xoş Gəlmisən! 👋</h4>
            <p class="mb-4">Zəhmət olmasa hesabınıza daxil olun və macəraya başlayın</p>

            <form id="formAuthentication" class="mb-3" action="<?php echo base_url('login_act'); ?>" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Şifrə</label>
                  <!-- <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                  </a> -->
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <!-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div> -->
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>


              <?php if ($this->session->userdata('err')) { ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                    <?php echo $this->session->flashdata('err'); ?>
                  </div>
                </div>
              <?php } ?>

              <?php if ($this->session->userdata('success')) { ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
                </div>
              <?php } ?>

            </form>


          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/js/bootstrap.js"></script>
  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo base_url('assets/admin/'); ?>assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?php echo base_url('assets/admin/'); ?>assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>