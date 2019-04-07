@extends('welcome')

@section('content')
@include('template.navbar')
<style type="text/css">
	.woocommerce .quantity .qty {
	    width: 5em;
	}
</style>
<div class="p-top-bottom-100 division header-area-hide" style="margin-top: 7%;">
    <div class="container">
        <div class="row">

<div class="col-md-12" >
    <div class="posts-holder">

        <div class="woocommerce-notices-wrapper"></div>
        <div id="product-964" class="post-964 product type-product status-publish has-post-thumbnail product_cat-accessories single-product-details single-post-details first instock sale shipping-taxable purchasable product-type-simple">

            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-2 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
				<?php
                  $gambar = $setting[0]->isi.$product->gambar;
                ?>

                <figure class="woocommerce-product-gallery__wrapper">
                    <div data-thumb="{{ $gambar }}" class="woocommerce-product-gallery__image">
                        <a href="{{ $gambar }}"><img width="600" height="600" src="{{ $gambar }}" class="wp-post-image" alt="" title="beanie-with-logo-1.jpg" data-caption="" data-src="/{{ $gambar }}" data-large_image="{{ $gambar }}" data-large_image_width="800" data-large_image_height="800" srcset="{{ $gambar }}" sizes="(max-width: 600px) 100vw, 600px"></a>
                    </div>
                    <span class="onsale">Sale!</span>
                </figure>
            </div>



            <div class="summary entry-summary">
                <h3 class="product_title entry-title h3-xs m-bottom-15">{{ $product->nama_produk }}</h3>
                <p class="price">
									@guest
						            <span class="price">
						                <ins>
							                <span class="woocommerce-Price-amount amount">
							                    <span class="woocommerce-Price-currencySymbol">Rp </span> {{ number_format($product->harga,0," ",".") }}
							                </span>
							            </ins>
						            </span>
						            @else
									<span class="price">
							                 <del>
							                    <span class="woocommerce-Price-amount amount">
							                        <span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($product->harga,0," ",".") }}
							                </span>
						            	</del>
						                <ins>
							                <span class="woocommerce-Price-amount amount">
							                    <span class="woocommerce-Price-currencySymbol">Rp </span> {{ number_format($product->harga_member,0," ",".") }}
							                </span>
							            </ins>
						            </span>
						        @endguest
                </p>
                <div class="woocommerce-product-details__short-description">
                    <p>{{ $product->promo }}</p>

                </div>

                <form class="cart" action="{{ route('addTocart') }}"  method="POST">
                	{{ csrf_field() }}
                	@if(!empty(Auth::user()->id))
                    <div class="quantity">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="button" class="minus count-control" value="<" onclick="minus()">
                                </div>
                            </div>

                            <input type="text" step="1" min="1" name="jumlah" id="jumlah" value="1" title="Qty" class="form-control qty text" >

                            <input type="hidden" name="id" id="id" value="{{ $product->id }}">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <input type="button" class="plus count-control" data-max="-1" value=">" onclick="plus()">
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
                    <button type="submit" name="add-to-cart"  class="single_add_to_cart_button button alt">Add to cart</button>

                </form>

                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-964">

                    <div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
                        {{ $product->deskripsi }}
                         <iframe width="499" height="147" src="https://www.youtube.com/embed/pdWI9DegPs0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

<script type="text/javascript">
	
    var count = 1;
    var countEl = document.getElementById("jumlah");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
    }

</script>

@include('template.footer')
@stop
