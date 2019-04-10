<?php $__env->startSection('content'); ?>

<div class="p-top-bottom-100 division header-area-hide" >
    <div class="container">
        <div class="row">
            <!-- BLOG POSTS HOLDER -->
            <div class="col-md-12 ">

<div class="wpb_column vc_column_container vc_col-sm-12 bg-tra">
    <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <div class="vc_empty_space"><span class="vc_empty_space_inner"></span></div>

            <div class="row">
                <div class="section-title text-center col-lg-10 offset-lg-1">
                    <h3 class="h3-xl">Pesanan Suksses </h3>
                    <h3 class="h3-xl"><img src="<?php echo e(asset('images/checklist.png')); ?>" style="width: 13%;"></h3>
                    <p class="p-lg -color">Selamat Pesanan Kamu telah berhasil</p>
                    <p class="p-lg -color">ID Order <?php echo e($penjualan[0]->id); ?>, akan segera diprosess setelah melakukan pembayaran <br> Segera selesaikan pembayaran mu </p>
                    <p class="p-lg -color" style="background: whitesmoke;">Melakukan pembayaran sebesar <br> Rp <?php echo e(number_format( $kodeUnik ,0," ",".")); ?></p>
                    <p class="p-lg -color" style="background: whitesmoke;">Kode Unik anda : <br>  <?php echo e(substr( $kodeUnik ,-3)); ?></p>

<hr>
                    <p class="p-lg -color">TRANSFER PEMBAYARAN KE REKENING BANK BERIKUT <br> <img src="https://upload.wikimedia.org/wikipedia/id/thumb/e/e0/BCA_logo.svg/1280px-BCA_logo.svg.png" style="width: 15%;vertical-align: bottom;" > <span style="margin-left: 4%;color: orange;">802131231</span> <br> Atas Nama : Suryadi</p>
                    <hr>
                    <p class="p-lg -color"> Sudah Bayar ? <br>Yu Konfirmasi Pembayaran Kamu Sekarang <br> 0880-2133-2312 <br> 
                    <a href="http://api.whatsapp.com/send?phone=6285742878199&text=Konfirmasi%20order%20no%20<?php echo e($penjualan[0]->id); ?>" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Konfirmasi</a>
                    </p>
                </div>
            </div>
            <!-- END SECTION TITLE -->
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/content/checkoutSuccess.blade.php */ ?>