<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/layouts/app.blade.php */ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <title>Member Panel</title>

  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('memberPanel/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('memberPanel/vendor/%40fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('memberPanel/css/argon.mine209.css?v=1.0.0')); ?>" type="text/css">
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
</head>

<body>
    <div id="app">
      <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/">
              <img src="<?php echo e(asset('images/logo.png')); ?>" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
              <!-- Sidenav toggler -->
              <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="/home">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Dashboards</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/team">
                    <i class="ni ni-single-02 text-pink"></i>
                    <span class="nav-link-text">Team</span>
                  </a>
                </li>
                <li class="nav-item">

                  <a class="nav-link" href="/landingPage">
                    <i class="ni ni-world-2 text-green"></i>
                    <span class="nav-link-text">LandingPage</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/trafic">
                    <i class="ni ni-chart-bar-32 text-info"></i>
                    <span class="nav-link-text">Trafic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/statusOrder">
                    <i class="ni ni-archive-2 text-red "></i>
                    <span class="nav-link-text">Status Order</span>
                  </a>
                </li>
                
                
              </ul>
              <!-- Divider -->
              <hr class="my-3">
            </div>
          </div>
        </div>
     </nav>

    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Search form -->

                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center ml-md-auto">
                
                  </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="https://png.pngtree.com/element_origin_min_pic/20/04/20/165716f6669e9fd.jpg">
                          </span>
                          <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold"><?php echo e(Auth::user()->nama); ?></span>
                          </div>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header noti-title">
                          <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="/profile" class="dropdown-item">
                          <i class="ni ni-single-02"></i>
                          <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(url('/logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                          <i class="ni ni-user-run"></i>
                          <span>Logout</span>
                        </a>
                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>

    </div>

    </div>

      <script src="<?php echo e(asset('memberPanel/vendor/jquery/dist/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/js-cookie/js.cookie.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/lavalamp/js/jquery.lavalamp.min.js')); ?>"></script>
      <!-- Optional JS -->
      <script src="<?php echo e(asset('memberPanel/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
      <script src="<?php echo e(asset('memberPanel/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
      <!-- Argon JS -->
      <script src="<?php echo e(asset('memberPanel/js/argon.mine209.js?v=1.0.0')); ?>"></script>
      <!-- Demo JS - remove this in your project -->
      <script src="<?php echo e(asset('memberPanel/js/demo.min.js')); ?>"></script>
</body>
</html>
