@extends('welcome')

@section('content')
@include('template.navbar')

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
                                <form action="{{ route('checkoutStore') }}" method="POST">
                                    {{ csrf_field() }}
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
                                                                <label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="email"></span></p>

                                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                                <label for="billing_address_1" class="">Alamat Pengiriman&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="alamat" id="alamat" placeholder="Alamat Jalan,RT/RW" value=""></span></p>
                                                            <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                                <label for="billing_address_2" class="screen-reader-text">Kecamatan</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="" autocomplete="address-line2"></span></p>
                                                             <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                                <label for="billing_address_2" class="screen-reader-text">Kota</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="kota" id="kota" placeholder="Kota" value="" autocomplete="address-line2"></span></p>
                                                             <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                                <label for="billing_address_2" class="screen-reader-text">Provinsi</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="provinsi" id="provinsi" placeholder="Provinsi" value="" autocomplete="address-line2"></span></p>

                                                            <p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
                                                                <label for="billing_postcode" class="">Kode POS &nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="kode_pos" id="kode_pos" placeholder="" value="" autocomplete="postal-code"></span></p>
                                                        </div>

                                                    </div>

                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <h3 id="order_review_heading">Your order</h3>

                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($carts as $cart)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                {{ $cart->nama_produk }}  <strong class="product-quantity">× {{ $cart->qty }}</strong> 
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp</span> {{ number_format($cart->harga,0," ",".") }}</span>

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>

                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span> {{ number_format($total[0]->totalHarga,0," ",".") }}</span>
                                                                <input type="hidden" class="input-text " name="sub_total" id="sub_total" placeholder="" value="{{  $total[0]->totalHarga}}" autocomplete="postal-code">
                                                            </td>
                                                        </tr>

                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($total[0]->totalHarga,0," ",".") }}</span></strong> </td>
                                                        </tr>

                                                    </tfoot>
                                                </table>

                                                <div id="payment" class="woocommerce-checkout-payment">
                                                   <ul class="wc_payment_methods payment_methods methods">
                                                    
                                                        <li class="wc_payment_method payment_method_cheque">                                                          
                                                            <label for="payment_method_cheque">
                                                                Metode Pengambilan </label>
                                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input checked id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="dijemput" data-order_button_text="">

                                                            <label for="payment_method_cod">
                                                                Dijemput </label>
                                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                                <p>Pay with cash upon delivery.</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_cheque">
                                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="dikirim" data-order_button_text="">
                                                           
                                                            <label for="payment_method_cheque">
                                                                Dikirim </label>
                                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-row place-order">

                                                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
                                                </div>

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
@include('template.footer')
@stop
