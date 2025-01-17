<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?>
  </title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('img/brand/favicon.png')); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('js/plugins/nucleo/css/nucleo.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo e(asset('css/argon-dashboard.css?v=1.1.2')); ?>" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(asset('img/brand/white.png')); ?>" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="<?php echo e(asset('img/brand/blue.png')); ?>">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo e(route('register')); ?>">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Registrate</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo e(route('login')); ?>">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Iniciar Sesion</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-6 py-lg-7">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white"><?php echo $__env->yieldContent('title', 'Bienvenidos'); ?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
   <?php echo $__env->yieldContent('content'); ?>
        <!-- footer -->

    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2018 <a href="/" class="font-weight-bold ml-1" ><?php echo e(config('app.name')); ?></a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Quienes Somos?</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="<?php echo e(asset('js/plugins/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo e(asset('js/argon-dashboard.min.js?v=1.1.2')); ?>"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html><?php /**PATH C:\laragon\www\citamedica\resources\views/layouts/form.blade.php ENDPATH**/ ?>