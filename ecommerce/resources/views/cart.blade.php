@extends('layout.template')

@section('title')
	{{$title}}
@endsection

@section('content')
<!-- Page info -->
<div class="page-top-info">
	<div class="container">
		<h4>Your Cart</h4>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb site-pagination">
			  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			  <li class="breadcrumb-item active" aria-current="page">Cart</li>
			</ol>
		  </nav>
	</div>
</div>
<!-- Page info end -->

<!-- cart section -->
<section class="cart-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="cart-table">
					<h3>Your Cart</h3>
					<div class="cart-table-warp">
						<table>
							<thead>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th class="size-th">Size</th>
									<th class="total-th">Price</th>
								</tr>
							</thead>
							<tbody>
								@foreach ( $order_items as $row )
								<tr>
									<td class="product-col">
										<img src="{{ asset('asset/img/cart/'. $row->image ) }}" alt="">
										<div class="pc-title">
											<h4>{{ $row->prodName }}</h4>
											<p>{{ $row->price }}</p>
											<span><p class="text-danger">{{ $row->stock.' left!' }}</p></span>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
											<div class="pro-qty">
												<input type="text" value="{{ $row->qty }}" disabled>
											</div>
										</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>{{ rupiah($row->price) }}</h4></td>
								</tr>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="total-cost">
						<h6>Total<span>{{ rupiah($total) }}</span></h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 card-right">
				<form class="promo-code-form">
					<input type="text" placeholder="Enter promo code">
					<button>Submit</button>
				</form>
				<a href="{{ route('checkout') }}" class="site-btn">Proceed to checkout</a>
				<a href="{{ route('home') }}" class="site-btn sb-dark">Continue shopping</a>
			</div>
		</div>
	</div>
</section>
<!-- cart section end -->
@endsection
