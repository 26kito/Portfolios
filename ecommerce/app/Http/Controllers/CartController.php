<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\OrderItem;

class CartController extends Controller
{

    use Traits\header;
    use Traits\cart;

    public function index() {
        $data['title'] = 'Cart';
        if ( Auth::check() ) {
            $id = Auth::user()->id;
            $data['order_items'] = DB::table('order_items')
                                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                                    ->join('products', 'order_items.product_id', '=', 'products.id')
                                    ->select('orders.id as orderId', 'products.name as prodName', 'products.image', 'products.price', 'products.stock', 'order_items.qty')
                                    ->where('orders.user_id', '=', $id)
                                    ->get();
            $data['total'] = 0;
            foreach ( $data['order_items'] as $row ) {
                $data['total'] = $data['total'] + ( $row->price*$row->qty );
            };
            return view( 'cart', $data, $this->header() );
            // return view( 'cart', $data, $this->header(), $this->orderItemsList() );
        };
        // return $this->orderItemsList();
    }
    public function addToCart() {
        $userId = Auth::user()->id;
        $orders = DB::table('orders')
                    ->join('order_items', 'orders.id', '=', 'order_items.order_id')
                    ->where('orders.user_id', '=', $userId)
                    ->get();
        $data['qty'] = 0;
        foreach ( $orders as $row ) {
            $data['qty'] = $data['qty'] + ( $row->qty );
        }
        // return [$orders, $data['addToCart']];
        // return back();
    }
}
