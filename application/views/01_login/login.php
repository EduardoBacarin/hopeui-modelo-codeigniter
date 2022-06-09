<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Crystal Manager | Login</title>

   <link rel="shortcut icon" href="<?= base_url('assets/svg/logo.svg') ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/core/libs.min.css') ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/hope-ui.min.css?v=1.2.0") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/custom.min.css?v=1.2.0") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/dark.min.css") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/customizer.min.css") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/rtl.min.css") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/plugins/toastr/build/toastr.min.css") ?>" />
   <script src="https://kit.fontawesome.com/f89139718b.js" crossorigin="anonymous"></script>

   <?php
   if (!empty($css_link)) {
      foreach ($css_link as $cada) {
         echo '<link rel="stylesheet" href="' . $cada . '" />';
      }
   }

   if (!empty($css)) {
      foreach ($css as $cada) {
         echo '<link rel="stylesheet" href="' . base_url($cada) . '" />';
      }
   }
   ?>
</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
   <!-- loader Start -->
   <div id="loading">
      <div class="loader simple-loader">
         <div class="loader-body"></div>
      </div>
   </div>
   <div id="div-carregando"></div>
   <!-- loader END -->
   <input type="hidden" id="base_url" value="<?= base_url(); ?>">

   <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <!-- <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                 <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                 <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                 <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                              </svg> -->
                              <img src="<?= base_url('assets/svg/logo.svg'); ?>" style="width:15%;">
                              <!--logo End-->
                              <h4 class="logo-title ms-3">Crystal Manager</h4>
                           </a>
                           <h2 class="mb-2 text-center">Login</h2>
                           <p class="text-center">Faça o login para ficar conectado.</p>
                           <form id="formEntrar" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" aria-describedby="password" name="password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Manter Logado</label>
                                    </div>
                                    <a href="recoverpw.html">Esqueceu sua senha?</a>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary btn-carregando">
                                    <span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true" style="display: none"></span>
                                    Acessar
                                 </button>
                              </div>
                              <p class="mt-3 text-center">
                                 Não tem uma conta? <a href="<?= base_url('login/registro') ?>" class="text-underline">Clique aqui para se registrar!</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sign-bg">
                  <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                        <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                        <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                        <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                     </g>
                  </svg>
               </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="<?= base_url("assets/images/auth/01.png") ?>" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
   </div>

   <!-- Library Bundle Script -->
   <script src="<?= base_url("assets/js/hope-ui/core/libs.min.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/core/external.min.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/charts/widgetcharts.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/charts/vectore-chart.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/charts/dashboard.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/plugins/fslightbox.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/plugins/setting.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/plugins/slider-tabs.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/plugins/form-wizard.js") ?>"></script>
   <script src="<?= base_url("assets/js/hope-ui/hope-ui.js") ?>" defer></script>
   <script src="<?= base_url("assets/plugins/toastr/toastr.js") ?>"></script>

   <?php
   if (!empty($js_link)) {
      foreach ($js_link as $cada) {
         echo '<script src="' . $cada . '" ></script>';
      }
   }

   if (!empty($js)) {
      foreach ($js as $cada) {
         echo '<script src="' . base_url($cada) . '" ></script>';
      }
   }
   ?>
</body>

</html>