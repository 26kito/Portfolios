@extends('layout.template')

@section('title')
	{{ ucwords($products->name) }}
@endsection

@section('content')
<!-- Page info -->
<div class="page-top-info">
	<div class="container">
		<h4>Details Product</h4>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb site-pagination">
			  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			  <li class="breadcrumb-item active" aria-current="page">Details Product</li>
			</ol>
		  </nav>
	</div>
</div>
<!-- Page info end -->

<!-- product section -->
<section class="product-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="product-pic">
					<img class="product-big-img" src="{{asset('storage/products-images/'.$products->image)}}" alt="{{'image of '.$products->image}}">
				</div>
				<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
					<div class="product-thumbs-track">
						<div class="pt active" data-imgbigurl="{{asset('asset/img/single-product/1.jpg')}}"><img src="{{asset('asset/img/single-product/thumb-1.jpg')}}" alt=""></div>
						<div class="pt" data-imgbigurl="{{asset('asset/img/single-product/2jpg')}}"><img src="{{asset('asset/img/single-product/thumb-2.jpg')}}" alt=""></div>
						<div class="pt" data-imgbigurl="{{asset('asset/img/single-product/3.jpg')}}"><img src="{{asset('asset/img/single-product/thumb-3.jpg')}}" alt=""></div>
						<div class="pt" data-imgbigurl="{{asset('asset/img/single-product/4.jpg')}}"><img src="{{asset('asset/img/single-product/thumb-4.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 product-details">
				<h2 class="p-title">{{ $products->name }}</h2>
				<h3 class="p-price">{{ rupiah($products->price) }}</h3>
				{{-- <h4 class="p-stock">Available: <span>In Stock</span></h4> --}}
				@if ( $products->stock > 0 )
					<h4 class="p-stock">Available: <span>In Stock !</span></h4>
				@else
					<h4 class="p-stock">Available: <span>Out of Stock !</span></h4>
				@endif
				<div class="p-rating">
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o fa-fade"></i>
				</div>
				<div class="p-review">
					<a href="">3 reviews</a>|<a href="">Add your review</a>
				</div>
				{{-- <div class="fw-size-choose">
					<p>Size</p>
					<div class="sc-item">
						<input type="radio" name="sc" id="s-size">
						<label for="s-size">S</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="m-size" checked>
						<label for="m-size">M</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="l-size">
						<label for="l-size">L</label>
					</div>
					<div class="sc-item disable">
						<input type="radio" name="sc" id="xl-size" disabled>
						<label for="xl-size">XL</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="xxl-size">
						<label for="xxl-size">XXL</label>
					</div>
				</div> --}}
				{{-- <div class="quantity">
					<p>Quantity</p>
					<div class="pro-qty"><input type="text" value="1"></div>
				</div> --}}
				<a href="#" class="site-btn">SHOP NOW</a>
				<div id="accordion" class="accordion-area">
					<div class="panel">
						<div class="panel-header" id="headingOne">
							<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
						</div>
						<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="panel-body">
								<p>{{ $products->description }}</p>
								<p>{{ 'Stock: '.$products->stock }}</p>
								<p>Mixed fibres</p>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-header" id="headingTwo">
							<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
						</div>
						<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="panel-body">
								<img src="{{asset('asset/img/cards.png')}}" alt="">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-header" id="headingThree">
							<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
						</div>
						<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="panel-body">
								<h4>7 Days Returns</h4>
								<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="social-sharing">
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- product section end -->

<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
	<div class="container">
		<div class="section-title">
			<h2>RELATED PRODUCTS</h2>
		</div>
		<div class="product-slider owl-carousel">
			<div class="product-item">
				<div class="pi-pic">
					<img src="{{asset('asset/img/product/1.jpg')}}" alt="">
					<div class="pi-links">
						<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
					</div>
				</div>
				<div class="pi-text">
					<h6>$35,00</h6>
					<p>Flamboyant Pink Top </p>
				</div>
			</div>
			<div class="product-item">
				<div class="pi-pic">
					<div class="tag-new">New</div>
					<img src="{{asset('asset/img/product/2.jpg')}}" alt="">
					<div class="pi-links">
						<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
					</div>
				</div>
				<div class="pi-text">
					<h6>$35,00</h6>
					<p>Black and White Stripes Dress</p>
				</div>
			</div>
			<div class="product-item">
				<div class="pi-pic">
					<img src="{{asset('asset/img/product/3.jpg')}}" alt="">
					<div class="pi-links">
						<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
					</div>
				</div>
				<div class="pi-text">
					<h6>$35,00</h6>
					<p>Flamboyant Pink Top </p>
				</div>
			</div>
			<div class="product-item">
					<div class="pi-pic">
						<img src="{{asset('asset/img/product/4.jpg')}}" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
			<div class="product-item">
				<div class="pi-pic">
					<img src="{{asset('asset/img/product/6.jpg')}}" alt="">
					<div class="pi-links">
						<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
					</div>
				</div>
				<div class="pi-text">
					<h6>$35,00</h6>
					<p>Flamboyant Pink Top </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- RELATED PRODUCTS section end -->
@endsection