<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/content/products.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style type="text/css">
.header-area-hide {
    margin-top: 90px;
}
</style>
<div class="p-top-bottom-100 division header-area-hide">
    <div class="container">
        <div class="row">
            <!-- BLOG POSTS HOLDER -->
            <div class="col-md-12 ">
                <div class="posts-holder">

                    <div class="woocommerce-notices-wrapper"></div>
                    <p class="woocommerce-result-count">
                        Produk-produk Dari Rezeki Kita
                    </p>
                    <div class="clearfix"></div>
                    <div class="products columns-3">

                        <div class="row">
                       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $gambar = $setting[0]->isi.$product->gambar;
                        ?>
						<div class="product-item col-md-4 col-sm-4 m-bottom-50">
						    <div class="post-947 product type-product status-publish has-post-thumbnail product_cat-accessories text-center loop-item instock sale shipping-taxable purchasable product-type-simple" style="margin-bottom: 30px;border: 1px solid #e2e2e2;">
						        <div class="loop-item-inner hover-overlay">
						            <span class="onsale">Sale!</span>
						            <img width="400" height="500" src="<?php echo e($gambar); ?>" class="attachment-genemy-400x500-crop size-genemy-400x500-crop" alt="">
						            <div class="loop-item-hover project-description white-color">
						                <div class="loop-item-hover-in">
						                 <a href="addTocart/<?php echo e($product->id); ?>" data-quantity="1" class="btn btn-tra-rose product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="947" data-product_sku="woo-beanie" aria-label="Add “Beanie” to your cart" rel="nofollow" title="Add to cart" style="border: 1px solid;">
						                    Add to cart
						                </a>
						                </div>
						            </div>
						            <div class="product-inner-buttons white-color">

						                <a class="yith-wcqv-button" data-product_id="947" href="product/<?php echo e($product->id); ?>" title="Quick View">
						                    <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
						                        <path fill="currentColor" d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"></path>
						                    </svg>
						                </a>

						                <div class="iconlink">
						                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-947">
						                       

						                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
						                            <span class="feedback"></span>
						                            <a href="../product/beanie/index.html" rel="nofollow">
						                                <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
						                                    <path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path>
						                                </svg>
						                                <!-- <i class="fas fa-heart"></i> --></a>
						                        </div>

						                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
						                            <span class="feedback"></span>
						                            <a href="../product/beanie/index.html" rel="nofollow">
						                                <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
						                                    <path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path>
						                                </svg>
						                                <!-- <i class="fas fa-heart"></i> --></a>
						                        </div>

						                        <div style="clear:both"></div>
						                        <div class="yith-wcwl-wishlistaddresponse"></div>

						                    </div>

						                    <div class="clear"></div>
						                </div>
						            </div>
						            <div class="item-overlay"></div>
						        </div>
						        <a href="product/<?php echo e($product->id); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
						            <h5 class="woocommerce-loop-product__title h5-sm m-top-30" style="margin-top: 2%;">
						              <?php echo e($product->nama_produk); ?>

						            </h5>
						                <span class="price"><del>
						                    <span class="woocommerce-Price-amount amount">
						                        <span class="woocommerce-Price-currencySymbol">Rp </span>300.000
						                </span></del>
						                <ins><span class="woocommerce-Price-amount amount">
						                    <span class="woocommerce-Price-currencySymbol">Rp </span> <?php echo e(number_format($product->harga,0," ",".")); ?>

						                </span></ins>
						            </span>
						        </a>
						    </div>
						</div>
					   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



						

                            <div class="clearfix"></div>
                        </div>

                    </div>
<!-- 
                    <div class="blog-page-pagination m-top-30">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a href="index.html" class="page-link">1</a></li>
                                <li class="page-item"><a href="page/2/index.html" class="page-link">2</a></li>
                                <li class="page-item next"><span class="page-link"><a href="page/2/index.html" class="older-posts">Next <i class="icon-chevron-right"></i></a></span></li>
                            </ul>
                        </nav>
                    </div> -->

                </div>
            </div>
            <!-- END BLOG POSTS HOLDER -->

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</div>

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>