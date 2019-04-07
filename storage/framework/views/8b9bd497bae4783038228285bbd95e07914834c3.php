<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/content/about.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style type="text/css">
        #hero-4 {
            padding-top: 75px;
            padding-bottom: 80px;
        }
</style>

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

                                        <img class="img-fluid" src="<?php echo e(asset('images/nutrisio_banner2.png')); ?>" alt="Welcome to Genemy">
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-6 offset-xl-1">
                                    <div class="about-txt">
                                        <h3 class="h3-xl wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Apa itu Nutrisio ?</h3>
                                        <p class="p-md grey-color wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Nutrisio adalah Superdrink ( jamu tetes konsentrasi tinggi ) dari formulasi 25 ekstrak herbal murni yang terstandar untuk terapi sel – sel otak dan gangguan kesehatan yang berkaitan dengan syaraf otak tepi. 
                                       	<br>
										Nutrisio merupakan inovasi formulasi herbal yang diramu secara fungsional dan rasional-medik dengan mengacu teknologi biomolekuler untuk optimalisasi bioavailabilitas.
										<br>
										Dengan memadukan kehebatan kearifan lokal (local genius) – pusaka ramuan jamu nusantara yang telah  teruji manfaatnya selama ratusan tahun – menjadi karya formula unik ”NUTRISIO”  yang berkasiat dan mengagumkan.</p>

                                     
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


<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>