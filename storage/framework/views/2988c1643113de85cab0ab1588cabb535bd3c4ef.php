<?php /* /var/www/html/nutrisio/resources/views/content/product.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="p-top-bottom-100 division header-area-hide" style="margin-top: 7%;">
    <div class="container">
        <div class="row">

<div class="col-md-12" >
    <div class="posts-holder">

        <div class="woocommerce-notices-wrapper"></div>
        <div id="product-964" class="post-964 product type-product status-publish has-post-thumbnail product_cat-accessories single-product-details single-post-details first instock sale shipping-taxable purchasable product-type-simple">

            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
				<?php
                  $ExplodeGambar = json_decode($product->gambar);
                  $gambar = $ExplodeGambar[0];
                ?>

                <figure class="woocommerce-product-gallery__wrapper">
                    <div data-thumb="/<?php echo e($gambar); ?>" class="woocommerce-product-gallery__image">
                        <a href="<?php echo e($gambar); ?>"><img width="600" height="600" src="/<?php echo e($gambar); ?>" class="wp-post-image" alt="" title="beanie-with-logo-1.jpg" data-caption="" data-src="/<?php echo e($gambar); ?>" data-large_image="/<?php echo e($gambar); ?>" data-large_image_width="800" data-large_image_height="800" srcset="/<?php echo e($gambar); ?>" sizes="(max-width: 600px) 100vw, 600px"></a>
                    </div>
                    <span class="onsale">Sale!</span>
                </figure>
            </div>

            <div class="summary entry-summary">
                <h3 class="product_title entry-title h3-xs m-bottom-15"><?php echo e($product->nama_produk); ?></h3>
                <p class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp</span><?php echo e($product->harga); ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp</span><?php echo e($product->harga); ?></span></ins></p>
                <div class="woocommerce-product-details__short-description">
                    <p><?php echo e($product->promo); ?></p>
                </div>

                <form class="cart" action="http://jthemes.org/wp/genemy/creative/product/beanie-with-logo/" method="post" enctype="multipart/form-data">

                    <div class="quantity">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="button" class="minus count-control" value="<">
                                </div>
                            </div>

                            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="form-control qty text" readonly="">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <input type="button" class="plus count-control" data-max="-1" value=">">
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/addTocart/<?php echo e($product->id); ?>" type="submit" name="add-to-cart" value="964" class="single_add_to_cart_button button alt">Add to cart</a>

                </form>

                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-964">

                    <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                        <?php echo e($product->deskripsi); ?>

                    </div>

                    <div style="clear:both"></div>
                    <div class="yith-wcwl-wishlistaddresponse"></div>

                </div>

                <div class="clear"></div>
            </div>

        </div>



    </div>
</div>
</div>
</div>
</div>

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>