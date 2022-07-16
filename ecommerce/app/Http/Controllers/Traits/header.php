<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

trait header {
    public function header() {
        if ( Auth::check() ) {
            $id = Auth::user()->id;
            $data['users'] = DB::table( 'users' )
                                ->join( 'orders', 'users.id' , '=' , 'orders.user_id' )
                                ->join( 'order_items', 'orders.id' , '=' , 'order_items.order_id' )
                                ->select( DB::raw( 'count(order_items.order_id) as qty' ) )
                                ->where( 'orders.user_id', '=', $id )
                                ->first();
            return $data;
        } elseif ( !Auth::check() ) {
            $arr = [];
            return $arr;
        };
    }
}