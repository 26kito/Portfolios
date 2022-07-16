<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    
    use Traits\header;

    // User
    public function index($id) {
        $data['title'] = 'Products';
        $data['products'] = Product::where('id', $id)->first();
        return view('products', $data);
    }

    // Admin
    public function productsList() {
        $data['title'] = 'Products List';
        $data['products'] = Product::all();
        return view('admin.product.list', $data);
    }
}