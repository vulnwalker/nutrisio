<?php $__env->startSection('content'); ?>
<?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
    <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<style type="text/css">
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 36px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    margin-bottom: 20px;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#provinsi').select2({
            placeholder: "Pilih Provinsi",
            allowClear: true
        });
        $('#kota').select2({
            placeholder: "Pilih Kota",
            allowClear: true
        });
        $('#metodePengiriman').select2({
            placeholder: "Pilih Metode Pengiriman",
            allowClear: true
        });
    });
</script>
<div class="p-top-bottom-100 division header-area-hide">
    <div class="container">
        <div class="row">
            <!-- BLOG POSTS HOLDER -->
            <div class="col-md-12 ">
                <div class="posts-holder">

                    <article id="post-940" class="post-940 page type-page status-publish hentry no-post-thumbnail single-page-details">
                        <div class="page-content">
                            <div class="woocommerce" style="margin-top: 4%;">

                                <div class="woocommerce-notices-wrapper"></div>
                                <form action="<?php echo e(route('checkoutStore')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div id="customer_details">
                                                <div>
                                                    <div class="woocommerce-billing-fields">

                                                        <h3>Billing details</h3>

                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                                <label for="billing_company" class="">Name</label><span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="name" id="name" value="" >
                                                                </span></p>
                                                            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                                <label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="phone" id="phone"></span></p>
                                                            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                                                <label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                                                <?php if(!empty(Auth::user()->id)): ?>
                                                                 <input type="email" class="input-text " name="email" id="email" value="<?php echo e(Auth::user()->email); ?>" readonly>
                                                                <?php else: ?>
                                                                 <input type="email" class="input-text " name="email" id="email">

                                                                <?php endif; ?>
                                                                   

                                                                </span></p>


                                                            <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                                 <label for="billing_address_1" class="">Alamat Pengiriman&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <select class="js-example-basic-single"  id="provinsi" name="provinsi" onchange="getKota()">
                                                                <option value=""></option>
                                                                <?php $__currentLoopData = $dataProvinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getDataProv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($getDataProv['province_id']); ?> "><?php echo e($getDataProv['province']); ?> </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <input type="hidden" id="hiddenProv" name="hiddenProv">
                                                             <select class="js-example-basic-single"  id="kota" name="kota" onchange="getHarga()">
                                                                <option value=""></option>
                                                            </select>
                                                            <input type="hidden" id="hiddenKota" name="hiddenKota">
                                                                <label for="billing_address_2" class="screen-reader-text">Kecamatan</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="" autocomplete="address-line2"></span></p>

                                                             <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                               <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="alamat" id="alamat" placeholder="Alamat Jalan,RT/RW" value=""></span></p>

                                                            <p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
                                                                <label for="billing_postcode" class="">Kode POS &nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="kode_pos" id="kode_pos" placeholder="" value="" autocomplete="postal-code"></span></p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <h3 id="order_review_heading">Your order</h3>

                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                    <ul class="wc_payment_methods payment_methods methods">

                                                        <li class="wc_payment_method payment_method_cheque">
                                                            <label for="payment_method_cheque">
                                                                Metode Pengambilan </label>
                                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input checked id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="dijemput" data-order_button_text="" onchange="metodePembayaran()">

                                                            <label for="payment_method_cod">
                                                                Dijemput </label>
                                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                                <p>Pay with cash upon delivery.</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_cheque">
                                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="dikirim" data-order_button_text="" onchange="metodePembayaran()">

                                                            <label for="payment_method_cheque">
                                                                Dikirim </label>
                                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div class="col-sm-6" id="displayPengiriman" style="display: none;">
                                                        <ul class="wc_payment_methods payment_methods methods">

                                                        <li class="wc_payment_method payment_method_cheque">
                                                            <label for="payment_method_cheque">
                                                                Metode Pengiriman </label>
                                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                        <select class="js-example-basic-single"  id="metodePengiriman" name="metodePengiriman" onchange="getPengiriman()">
                                                                <option value=""></option>
                                                        </select>
                                                    </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <?php echo e($cart->nama_produk); ?>  <strong class="product-quantity">× <?php echo e($cart->qty); ?></strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp</span> <?php echo e(number_format($cart->harga,0," ",".")); ?></span>

                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>



                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span> <?php echo e(number_format($total[0]->totalHarga,0," ",".")); ?></span>
                                                                <input type="hidden" class="input-text " name="sub_total" id="sub_total" placeholder="" value="<?php echo e($total[0]->totalHarga); ?>" autocomplete="postal-code">
                                                            </td>
                                                        </tr>

                                                        <tr class="cart-subtotal">
                                                            <th>Ongkir</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol" id="ongkir"> </span> </span>
                                                                <input type="hidden" class="input-text " name="ongkirValue" id="ongkirValue" placeholder=""  autocomplete="postal-code"><input type="hidden" class="input-text " name="hiddenHargaOngkir" id="hiddenHargaOngkir" placeholder=""  autocomplete="postal-code">
                                                            </td>
                                                        </tr>

                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol" id="totalHargaSpan">Rp <?php echo e(number_format($total[0]->totalHarga,0," ",".")); ?></span></span></strong> </td>
                                                        </tr>

                                                    </tfoot>
                                                </table>
                                                <div class="form-row place-order">

                                                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
                                                </div>

                                        </div>
                                        <!-- .col-sm-6 -->
                                    </div>
                                    <!-- .row -->
                                </form>
                            </div>
                            <span class="cp-load-after-post"></span></div>
                    </article>

                </div>
            </div>
            <!-- END BLOG POSTS HOLDER -->

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</div>

<script type="text/javascript">
    function currencyFormatDE(num) {
      return (
        num
          .toFixed(0) // always two decimal digits
          .replace(',', '.') // replace decimal point character with ,
          .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
      ) // use . as a separator
    }

    function getKota() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


        $.ajax({
        url: "/getKota",
        data: {
            "id_prov": $("#provinsi").val()
        },
        dataType: "json",
        type: "post",
        success: function(data){
           $("#hiddenProv").val($("#provinsi option:selected").text());
           $.each(data.dataKota, function(key, value){
                $('#kota').append('<option value="'+value.city_id+'">'+value.city_name+'</option>');
           });
        }
    });
    }

    function  getHarga() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


        $.ajax({
        url: "/getInfoKota",
        data: {
            "id_kota": $("#kota").val()
        },
        dataType: "json",
        type: "post",
        success: function(data){
          $("#hiddenKota").val($("#kota option:selected").text());
        }
    });
    }

    function metodePembayaran() {
        var radios = document.getElementsByName('payment_method');

        if(radios[1].checked == true){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

            document.getElementById("displayPengiriman").style.display = "block";
            $.ajax({
                url: "/getInfoKota",
                data: {
                    "id_kota": $("#kota").val()
                },
                type: "post",
                // dataType: "json",
                success: function(data){
                    var resp = eval("(" + data + ")");

                    var arrayInfo = resp.getInfoKota[0];
                    var arrayCosts = arrayInfo.costs;
                    $("#hiddenHargaOngkir").val(JSON.stringify(arrayCosts));
                    for (var i = 0; i < arrayCosts.length; i++) {
                        // alert(arrayCosts[i]['service']);
                          $('#metodePengiriman').append('<option value="'+arrayCosts[i]['service']+'">'+arrayCosts[i]['description']+'</option>');
                    }

                    // console.log(arrayInfo);
                  //   var jsonGetInfoKota = JSON.parse(data.getInfoKota);
                  // $.each(jsonGetInfoKota[0]["costs"], function(key, value){

                  //  });
                  // var decodeJson = JSON.parse(data);
                  // // alert(decodeJson["getInfoKota"]["code"]);
                  // console.log(decodeJson.["getInfoKota"]);
                }
            });
        }else{
            document.getElementById("displayPengiriman").style.display = "none";

        }
    }

    function getPengiriman() {
        if($("#metodePengiriman").val() != ""){
            var arrayCosts = JSON.parse($("#hiddenHargaOngkir").val());
            for (var i = 0; i < arrayCosts.length; i++) {
                if (arrayCosts[i].service == $("#metodePengiriman").val()) {
                    $("#ongkir").html("Rp "+currencyFormatDE(arrayCosts[i].cost[0].hargaOngkir));
                    $("#ongkirValue").val(arrayCosts[i].cost[0].hargaOngkir);
                    var ongkirPlusTot = parseInt($("#sub_total").val()) + parseInt(arrayCosts[i].cost[0].hargaOngkir);
                    $("#totalHargaSpan").html("Rp "+currencyFormatDE(ongkirPlusTot));
                    console.log(ongkirPlusTot);
                }
            }
        }
    }
</script>
<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/content/checkout.blade.php */ ?>