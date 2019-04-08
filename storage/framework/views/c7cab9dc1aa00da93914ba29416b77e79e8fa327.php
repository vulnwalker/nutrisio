<?php $__env->startSection('content'); ?>
<?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="portfolio" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax-image="http://jthemes.org/wp/genemy/creative/wp-content/themes/genemy/images/banner-1.jpg" data-opacity="1" data-size="cover" data-width="100%" data-position="cover" data-repeat="cover" data-attachment="cover" class="vc_section wide-100 bg-white">
    <div class="container">
        <div class="vc_row wpb_row vc_row-fluid genemy-default bg-tra">
            <div class="wpb_column vc_column_container vc_col-sm-12 bg-tra">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>

                        <div class="row">
                            <div class="section-title text-left col-md-11 col-lg-10">
                                <h3 class="h3-xl">Foto Gallery <span class='underline-rose default-color'>Rizki Kita</span></h3>
                                <p class="p-lg -color"></p>
                            </div>
                        </div>
                        <!-- END SECTION TITLE -->
                        <div id="portfolio-1" class="portfolio-section">
                            <!--   PORTFOLIO  -->

                            <!-- PORTFOLIO IMAGES HOLDER -->
                            <div class="row">
                                <div class="col-md-12 portfolio-items-list ind-5">
                                    <div class="masonry-wrap grid-loaded">

                                        <!-- IMAGE #1 -->
                                        <?php $__currentLoopData = $gallerys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                          $gambar = $setting[0]->isi.$gallery->gambar;
                                        ?>
                                        <div class="portfolio-item  digital-art graphic-design">
                                            <div class="hover-overlay">

                                                <!-- Project Preview Image -->
                                                <img class="img-fluid" src="<?php echo e($gambar); ?>" alt="Mockup PSD Image" />
                                                <div class="item-overlay"></div>

                                                <div class="project-description white-color">
                                                    <div class="project-link">

                                                        <p class="rose-color">Digital Art, Graphic Design</p>
                                                        <!-- Project Meta -->

                                                        <h5 class="h5-lg">

										<!-- Image Zoom -->
										<a class="image-link" href="<?php echo e($gambar); ?>" title="Mockup PSD Image">										
										</a>
									</h5>
                                                        <!-- Project Link -->
                                                    </div>
                                                </div>
                                                <!-- Project Description -->

                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- END IMAGE #1 -->


                                    </div>
                                </div>
                            </div>
                            <!-- END PORTFOLIO IMAGES HOLDER -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/content/gallery.blade.php */ ?>