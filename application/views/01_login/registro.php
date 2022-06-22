<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Crystal Manager | Registro</title>

   <link rel="shortcut icon" href="<?= base_url('assets/svg/logo.svg') ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/core/libs.min.css') ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/hope-ui.min.css?v=1.2.0") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/custom.min.css?v=1.2.0") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/dark.min.css") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/customizer.min.css") ?>" />
   <link rel="stylesheet" href="<?= base_url("assets/css/rtl.min.css") ?>" />
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
   <div id="carregando"></div>
   <!-- loader END -->
   <input type="hidden" id="base_url" value="<?= base_url(); ?>">
   <div class="wrapper">
      <section class="login-content m-0">
         <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="<?= base_url('assets/images/auth/05.png') ?>" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <img src="<?= base_url('assets/svg/logo.svg'); ?>" style="width:15%;">
                              <!--logo End-->
                              <h4 class="logo-title ms-3">Crystal Manager</h4>
                           </a>
                           <h2 class="mb-2 text-center">Registrar</h2>
                           <p class="text-center">Crie sua conta no Crystal Manager</p>
                           <form id="formCadastrarUsuario" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="nome" class="form-label">Nome Completo</label>
                                       <input type="text" class="form-control" id="nome" name="nome" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="cpf" class="form-label">CPF</label>
                                       <input type="text" class="form-control cpfcnpj" id="cpf" name="cpf" placeholder=" " maxlength="14">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" name="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="celular" class="form-label">Celular</label>
                                       <input type="text" class="form-control celular" id="celular" name="celular" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Senha</label>
                                       <input type="password" class="form-control" id="password" name="password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="confirmar_password" class="form-label">Confirmar Senha</label>
                                       <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" placeholder=" ">
                                    </div>
                                 </div>
                                 <!-- <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Eu li e concordo com os termos de uso.</label>
                                    </div>
                                 </div> -->
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Registrar</button>
                              </div>
                              <p class="mt-3 text-center">
                                 Já tem uma conta? Faça o <a href="<?= base_url('login') ?>" class="text-underline">Login</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                     </g>
                  </svg>
               </div>
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