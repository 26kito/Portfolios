<div class="row">
    @foreach ( $products as $item )
    @for ( $i = $item->id; $i < 13; $i++ )
        <div class="col-lg-3 col-sm-6">
            <div class="product-item">
                <div class="pi-pic">
                    <a href="{{ url('products/'.$item->id) }}">
                        <img src="{{ asset('storage/products-images/'.$item->image) }}" alt="{{ 'image of '.$item->name }}">
                    </a>
                    <div class="pi-links">
                        {{-- <a href="#" class="add-card add-to-cart"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> --}}
                        <a href="#" wire:click.prevent='addToCart({{ $item->id }})' class="add-card add-to-cart"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>{{ rupiah($item->price) }}</h6>
                    <p class="prodName" value="{{$item->name}}">{{$item->name}}</p>
                </div>
            </div>
        </div>
    @break @endfor
    @endforeach
</div>