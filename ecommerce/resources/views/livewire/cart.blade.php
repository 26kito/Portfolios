<div class="up-item">
    <div class="shopping-card">
        <i class="flaticon-bag"></i>
        @auth
        @if ( Auth::user()->level === 'USER' )
            @if ( $cartQty->qty > 0 )
            <span class="qty">{{ $cartQty->qty }}</span>
            @endif
        @endif
        @endauth
    </div>
    <a href="{{ route('cart') }}" class="orderCart">Your Cart</a>
</div>