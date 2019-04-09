<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <title>Member Panel</title>

  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('memberPanel/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('memberPanel/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('memberPanel/css/argon.mine209.css?v=1.0.0') }}" type="text/css">
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

<style type="text/css">
  svg {
  pointer-events: none;
}
</style>
    <script type="text/javascript">
            
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>

    
    <script src="{{ asset('memberPanel/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js" ></script>




       
</head>

<body>
      <nav class="nav sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/">
              <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img" alt="...">
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
              <ul class="nav navbar-nav">
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

  <!-- Main content -->
    <div class="main-content" >
        <nav class="nav navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Search form -->

                  <!-- Navbar links -->
                  <ul class="nav navbar-nav align-items-center ml-md-auto" >
                    <li class="nav-item d-xl-none">
                      <!-- Sidenav toggler -->
                      <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                        </div>
                      </div>
                    </li>
                  </ul>
                <ul class="nav navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">

                      <a class="nav-link pr-0"  onclick="myFunction()"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="https://png.pngtree.com/element_origin_min_pic/20/04/20/165716f6669e9fd.jpg">
                          </span>
                          <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->nama }}</span>
                          </div>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" id="myDropdown">
                        <div class="dropdown-header noti-title">
                          <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="/profile" class="dropdown-item">
                          <i class="ni ni-single-02"></i>
                          <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                          <i class="ni ni-user-run"></i>
                          <span>Logout</span>
                        </a>
                        <form id="logout-form" name="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
        </nav>
        @yield('content')

    </div>


      <script src="{{ asset('memberPanel/vendor/js-cookie/js.cookie.js')}}"></script>
      <script src="{{ asset('memberPanel/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
      <script src="{{ asset('memberPanel/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
      <script src="{{ asset('memberPanel/vendor/lavalamp/js/jquery.lavalamp.min.js')}}"></script>
      <!-- Optional JS -->
      <script src="{{ asset('memberPanel/vendor/chart.js/dist/Chart.min.js')}}"></script>
      <script src="{{ asset('memberPanel/vendor/chart.js/dist/Chart.extension.js')}}"></script>
      <!-- Argon JS -->
      <script src="{{ asset('memberPanel/js/argon.mine209.js?v=1.0.0')}}"></script>
      <!-- Demo JS - remove this in your project -->
      <script src="{{ asset('memberPanel/js/demo.min.js')}}"></script>
</body>
</html>
