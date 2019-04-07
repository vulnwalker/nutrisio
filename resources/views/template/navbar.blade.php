        <header id="header" class="header navbar-style1">
            <nav class="navbar navbar-expand-lg hover-menu  fixed-top bg-light navbar-light">
                <div class="container">

                    <!-- logo -->
                    <a href="/" class="navbar-brand logo-white" rel="home"><img src="../wp-content/themes/genemy/images/logo-white.png" height="30" alt="Genemy"></a>
                    <a href="/" class="navbar-brand logo-black" rel="home"><img src="{{ asset('images/logo.png') }}" height="30" alt="Genemy"></a>

                    <!-- Responsive Menu Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> --></span></button>

                    <div id="navbarSupportedContent" class="cool-megamenu collapse navbar-collapse collapse navbar-collapse txt-700 rose-hover">
                        <ul id="menu-header-menu" class="navbar-nav ml-auto navbar-nav ml-auto">
                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item nl-simple"><a href="/" class="nav-link">HOME</a></li>
                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item nl-simple"><a href="/products" class="nav-link">PRODUCT</a></li>
                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164 nav-item nl-simple"><a href="/about" class="nav-link">ABOUT</a></li>
                            <li class="cart-icon nav-icon menu-item menu-item-has-children nav-item dropdown nl-simple">
                                <a class="cart-contents nav-link" href="/cart" title="View your shopping cart">
                                    <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" data-prefix="fa" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path>
                                    </svg>
                                    <!-- <i class="fa fa-shopping-cart"></i> --><span class="cart-contents-count primary-bg white-color">18</span></a>
                            </li>
                        @guest
                          <li class="nav-button nav-button1">
                             <a href="/login" class="btn btn-arrow btn-yellow" target="_self">
                                <span>Login Member<svg class="svg-inline--fa fa-angle-double-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path></svg><!-- <i class="fas fa-angle-double-right"></i> -->
                                </span>
                             </a>
                         </li>
                        @else
                        <li id="menu-item-990" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-990 nav-item dropdown nl-simple"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nama }}</a>
                        <div class="sub-menu dropdown-menu"><div class="crrm-inner row">
                            <div id="menu-item-992" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-992 ">
                                <a href="/home" class="dropdown-item">Dashboard</a>
                            </div>
                            <div id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-991 ">
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </div>
                        </div><span class="caret"></span></div>
                        </li>
                        @endguest

                        </ul>
                    </div>
                </div>
                <!-- End container -->
            </nav>
            <!-- End navbar -->
        </header>