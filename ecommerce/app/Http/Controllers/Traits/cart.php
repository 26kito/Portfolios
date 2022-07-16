<?php

namespace App\Http\Controllers\Traits;

use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

trait cart {

    // public $listeners = ['addToCart' => 'addToCart'];

    public function cart() {
        if ( Auth::check() ) {
            $userId = Auth::user()->id;
            $cartQty = DB::table( 'users' )
                        ->join( 'orders', 'users.id' , '=' , 'orders.user_id' )
                        ->join( 'order_items', 'orders.id' , '=' , 'order_items.order_id' )
                        ->select( DB::raw( 'count(order_items.order_id) as qty' ) )
                        ->where( 'orders.user_id', '=', $userId )
                        ->first();
            return $cartQty;
        } elseif ( !Auth::check() ) {
            $arr = [];
            return $arr;
        };
    }

    public function TraitAddToCart($id) {
        if ( Auth::check() ) {
            $userId = Auth::user()->id;
            // $addToCart = OrderItem::with('user', 'order', 'product')->get();
            OrderItem::create([
                'order_id' => $userId,
                'product_id' => $id,
                'qty' => 1
            ]);
            // return $addToCart;
        } elseif ( !Auth::check() ) {
            $arr = [];
            return $arr;
        };
    }
}