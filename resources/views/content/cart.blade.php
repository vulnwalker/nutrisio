@extends('welcome')

@section('content')
@include('template.navbar')

<div class="p-top-bottom-100 division header-area-hide" style="margin-top: 6%;">
    <div class="container">
        <div class="row">
            <!-- BLOG POSTS HOLDER -->
            <div class="col-md-12 ">
                <div class="posts-holder">

                    <article id="post-939" class="post-939 page type-page status-publish hentry no-post-thumbnail single-page-details">
                        <div class="page-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-cart-form" action="http://jthemes.org/wp/genemy/creative/cart/" method="post">

                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($carts as $cart)
                                            <tr class="woocommerce-cart-form__cart-item cart_item">

                                                <td class="product-remove">
                                                    <a href="/delDataCart/{{ $cart->id }}" class="remove" aria-label="Remove this item" data-product_id="955" data-product_sku="woo-album">×</a> </td>

                                                <td class="product-name" data-title="Product">
                                                    <a href="/product/{{ $cart->id }}">{{ $cart->nama_produk }}</a> </td>

                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format( $cart->harga,0," ",".") }}</span>
                                                </td>

                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="minus count-control" value="<">
                                                                </div>
                                                            </div>

                                                            <input type="text" step="1" min="0" name="cart[ef4e3b775c934dada217712d76f3d51f][qty]" value="1" title="Qty" class="form-control qty text" readonly="">

                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="plus count-control" data-max="-1" value=">">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>

                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format( $cart->harga * 1,0," ",".") }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <td colspan="6" class="actions">

                                                    <a href="/products" class="button" name="update_cart" value="Update cart" >Update cart</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>

                                <div class="cart-collaterals">
                                    <div class="cart_totals ">

                                        <h2>Cart totals</h2>

                                        <table cellspacing="0" class="shop_table shop_table_responsive table">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($total[0]->totalHarga,0," ",".") }}</span>
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp</span> {{ number_format( $total[0]->totalHarga,0," ",".") }} </span></strong> </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <div class="wc-proceed-to-checkout">

                                            <a href="/checkout" class="checkout-button button alt wc-forward">
    Proceed to checkout</a>
                                        </div>

                                    </div>
                                </div>

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
