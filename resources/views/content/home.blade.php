@extends('welcome')

@section('content')
@include('template.navbar')
<style type="text/css">
        #hero-4 {
            padding-top: 75px;
            padding-bottom: 80px;
        }
</style>
<section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax-image="http://jthemes.org/asset/genemy/creative/asset-content/themes/genemy/images/banner-1.jpg" data-opacity="1" data-size="cover" data-width="100%" data-position="cover" data-repeat="cover" data-attachment="cover" class="vc_section wide-60 bg-white">
    <div class="container">
        <div class="vc_row assetb_row vc_row-fluid genemy-default bg-tra">
            <div class="assetb_column vc_column_container vc_col-sm-12 bg-tra">
                <div class="vc_column-inner">
                    <div class="assetb_wrapper">
                        <div class="hero-class" data-class="hero-section division" data-section_id="hero-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="hero-txt">
                                        <span class="section-id rose-color">Design and Development</span>
                                        <h3>We use our experience &amp; innovations</h3>
                                        <!-- Title -->
                                        <p class="p-md grey-color">Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus GeneGenemy - Creative Multi Concept Landing Pages Pack magna at risus</p>
                                        <a target="_self" href="#" title="Discover Our Projects " class="btn btn-arrow m-top-20 btn-default btn-md"><span>Discover Our Projects <i class="fa fa-angle-double-right"></i></span></a>
                                    </div>
                                </div>
                                <!-- END HERO TEXT -->

                                <div class="col-md-6">
                                    <div class="hero-img portfolio-items-list">
                                        <div class="masonry-wrap grid-loaded">

                                            <div class="portfolio-item width_2">
                                                <img class="img-fluid" src="{{ asset('images/nutrisio_banner.png')}}" alt="Image 1" />
                                            </div>
                                            <!-- IMAGE #1 -->

                                            <div class="portfolio-item width_2">
                                                <img class="img-fluid" src="{{ asset('images/nutrisio_banner4.png')}}" alt="Image 2" />
                                            </div>
                                            <!-- IMAGE #1 -->

                                            <div class="portfolio-item width_2">
                                                <img class="img-fluid" src="{{ asset('images/nutrisio_banner2.png')}}" alt="Image 3" />
                                            </div>
                                            <!-- IMAGE #1 -->

                                            <div class="portfolio-item width_2">
                                                <img class="img-fluid" src="{{ asset('images/nutrisio_banner3.png')}}" alt="Image 4" />
                                            </div>
                                            <!-- IMAGE #1 -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END HERO IMAGE -->

                            </div>
                            <!-- End row -->
                        </div>
                        <!-- END HERO-4 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax-image="http://jthemes.org/wp/genemy/creative/wp-content/themes/genemy/images/banner-1.jpg" data-opacity="1" data-size="cover" data-width="100%" data-position="cover" data-repeat="cover" data-attachment="cover" class="vc_section wide-60 bg-white" style="position: relative; left: 15px; box-sizing: border-box; width: 1351px; padding-left: 0px; padding-right: 0px;">
    <div class="container">
        <div class="vc_row wpb_row vc_row-fluid genemy-default bg-tra">
            <div class="wpb_column vc_column_container vc_col-sm-12 bg-tra">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div id="about-3" class="about-section division">
                            <div class="row d-flex align-items-center">

                                <div class="col-md-6 col-lg-5">

                                    <div class="about-img wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                                        <img class="img-fluid" src="{{ asset('asset-content/themes/genemy/images/image-01.png') }}" alt="Welcome to Genemy">
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-6 offset-xl-1">
                                    <div class="about-txt">

                                        <span class="section-id rose-color wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Welcome to Rezeki Kita</span>

                                        <h3 class="h3-xl wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We bring the best things for you</h3>
                                        <p class="p-md grey-color wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">An magnis nulla dolor sapien augue erat iaculis pretium purus tempor magna ipsum vitae purus primis ipsum and congue magna odio augue ligula rutrum nullam</p>

                                        <div class="wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"></div>

                                        <div class="m-bottom-15">
                                            <ul class="content-list">
                                                <li class="wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                                                    <p>Vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus velna auctor congue tempus undo magna </p>
                                                </li>
                                                <li class="wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                                    <p>An enim nullam tempor sapien gravida donec enim ipsum porta blandit justo integer odio velna vitae auctor integer luctus</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="modal-video wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                            <a class="video-popup2" href="https://www.youtube.com/embed/SZEflIVnhH8">
                                                <svg class="svg-inline--fa fa-play-circle fa-w-16 rose-color" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                                </svg>
                                                <!-- <i class="rose-color fas fa-play-circle"></i> -->Watch Our Video <span class="">duration: 2:40 min</span></a>
                                        </div>
                                        <!-- Modal Video Link -->

                                    </div>
                                </div>
                                <!-- END ABOUT TEXT -->
                            </div>
                            <!-- End row -->
                        </div>
                        <!-- END ABOUT-3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template.footer')
@stop
