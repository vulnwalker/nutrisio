@extends('welcome')

@section('content')
@include('template.navbar')
 <meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
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
                                        <?php $hargaTotal=0; ?>
                                        @foreach ($carts as $cart)
                                            <tr class="woocommerce-cart-form__cart-item cart_item">

                                                <td class="product-remove">
                                                    <a href="/delDataCart/{{ $cart->id }}" class="remove" aria-label="Remove this item" data-product_id="955" data-product_sku="woo-album">×</a> </td>

                                                <td class="product-name" data-title="Product">
                                                    <a href="/product/{{ $cart->id }}">{{ $cart->nama_produk }}</a> </td>
                                                @if(!empty(Auth::user()->id))
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format( $cart->harga_member,0," ",".") }}</span>
                                                </td>
                                                @else
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format( $cart->harga,0," ",".") }}</span>
                                                </td>
                                                @endif

                                                <td class="product-quantity" data-title="Quantity">
                                                    @if(!empty(Auth::user()->id))
                                                    <div class="quantity">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="minus count-control" value="<" onclick="minus('<?php echo $cart->id; ?>')">
                                                                </div>
                                                            </div>

                                                            <input type="text" step="1" min="1" name="jumlah" id="jumlah{{$cart->id}}" value="{{ $cart->qty }}" title="Qty" class="form-control qty text" onkeyup="enter('<?php echo $cart->id; ?>')">

                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="plus count-control" data-max="-1" value=">" onclick="plus('<?php echo $cart->id; ?>')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="quantity">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="minus count-control" value="<">
                                                                </div>
                                                            </div>

                                                            <input type="text" step="1" min="1" name="jumlah" id="jumlah" value="1" title="Qty" class="form-control qty text" readonly>

                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <input type="button" class="plus count-control" data-max="-1" value=">">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endguest

                                                </td>
                                                @if(!empty(Auth::user()->id))
                                                <?php $hargaTotal = $hargaTotal + ($cart->harga_member * $cart->qty); ?>
                                                <td class="product-subtotal" data-title="Total">
                                                    <input type="hidden" id="hargaProduk{{ $cart->id }}" value="{{$cart->harga_member}}">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp <span id='totalProduk{{$cart->id}}'>
                                                        {{ number_format( $cart->harga_member * $cart->qty,0," ",".") }}
                                                    </span></span></span>
                                                </td>
                                                @else
                                                <?php $hargaTotal = $hargaTotal + ($cart->harga *1); ?>
                                                 <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format( $cart->harga * 1,0," ",".") }}</span>
                                                </td>
                                                @endif
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

                                        <h2>Cart totals </h2>

                                        <table cellspacing="0" class="shop_table shop_table_responsive table">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Total</th>
                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>
                                                        <span id="totalCart">{{ number_format($hargaTotal,0," ",".") }} </span></span>
                                                    </td>
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


<script type="text/javascript">
    function currencyFormatDE(num) {
      return (
        num
          .toFixed(0) // always two decimal digits
          .replace(',', '.') // replace decimal point character with ,
          .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
      ) // use . as a separator
    }

    function enter(idSpan){
        var hargaSebelumnya = parseInt($("#totalProduk"+idSpan).text().replace(/\./g, ''));
        var hargaProduk = document.getElementById("hargaProduk"+idSpan).value;
        var count = document.getElementById("jumlah"+idSpan).value;
        var countEl = document.getElementById("jumlah"+idSpan);
        countEl.value = count;
        var totalProduk = parseInt(hargaProduk * count);
        $("#totalProduk"+idSpan).html(currencyFormatDE(totalProduk));
        $("#totalCart").text(currencyFormatDE(parseInt($("#totalCart").text().replace(/\./g, '')) - hargaSebelumnya + totalProduk));

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
        $.ajax({
            url: "/changeQty",
            data: {
                "id": idSpan,
                "jumlah": $("#jumlah"+idSpan).val(),
                "action": "tambah",
            },
            type: "post",
            // dataType: "json",
            success: function(data){
                
            }
        });
    }

    function plus(idSpan){
        var hargaSebelumnya = parseInt($("#totalProduk"+idSpan).text().replace(/\./g, ''));
        var hargaProduk = document.getElementById("hargaProduk"+idSpan).value;
        var count = document.getElementById("jumlah"+idSpan).value;
        var countEl = document.getElementById("jumlah"+idSpan);
        count++;
        countEl.value = count;
        var totalProduk = parseInt(hargaProduk * count);
        $("#totalProduk"+idSpan).html(currencyFormatDE(totalProduk));
        $("#totalCart").text(currencyFormatDE(parseInt($("#totalCart").text().replace(/\./g, '')) - hargaSebelumnya + totalProduk));
    
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
        $.ajax({
            url: "/changeQty",
            data: {
                "id": idSpan,
                "jumlah": $("#jumlah"+idSpan).val(),
                "action": "tambah",
            },
            type: "post",
            // dataType: "json",
            success: function(data){
                
            }
        });
    }
    function minus(idSpan){
          var hargaSebelumnya = parseInt($("#totalProduk"+idSpan).text().replace(/\./g, ''));
          var hargaProduk = document.getElementById("hargaProduk"+idSpan).value;
          var count = document.getElementById("jumlah"+idSpan).value;
          var countEl = document.getElementById("jumlah"+idSpan);
          if (count > 1) {
            count--;
            countEl.value = count;
          }

        var totalProduk = parseInt(hargaProduk * count);
        $("#totalProduk"+idSpan).html(currencyFormatDE(totalProduk));
        $("#totalCart").text(currencyFormatDE(parseInt($("#totalCart").text().replace(/\./g, '')) - hargaSebelumnya + totalProduk)); 

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
        $.ajax({
            url: "/changeQty",
            data: {
                "id": idSpan,
                "jumlah": $("#jumlah"+idSpan).val(),
                "action": "tambah",
            },
            type: "post",
            // dataType: "json",
            success: function(data){
                
            }
        });
    }

</script>
@include('template.footer')
@stop
