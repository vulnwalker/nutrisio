<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/welcome.blade.php */ ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<!-- Mirrored from jthemes.org/asset/genemy/creative/landing/design-studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 21:52:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="vieassetort" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Rezeki Kita</title>

    <?php echo $__env->make('template.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <body class="page-template page-template-templates page-template-onepage-template page-template-templatesonepage-template-php page page-id-198 page-child parent-pageid-161 woocommerce-no-js woocommerce-wishlist woocommerce woocommerce-page layout-minimal genemy-layout-rounded width no-sidebar assetb-js-composer js-comp-ver-5.5.5 vc_responsive">

        <!-- PRELOADER SPINNER -->
        <div id="loader-wrapper">
            <div id="loader">
                <div class="cssload-spinner">
                    <div class="cssload-ball cssload-ball-1" style="background: #02a9ef;"></div>
                    <div class="cssload-ball cssload-ball-2" style="background: #02a9ef;"></div>
                    <div class="cssload-ball cssload-ball-3" style="background: #02a9ef;"></div>
                    <div class="cssload-ball cssload-ball-4" style="background: #02a9ef;"></div>
                </div>
            </div>

        </div>

        <div id="page" class="page">
        
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('template.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>