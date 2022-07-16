<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    use Traits\header;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $data['title'] = "Dashboard";
        return view('admin.dashboard', $data);
    }

    public function home() {
        $data['title'] = "Dashboard";
        $data['products'] = Product::all();
        return view('index', $data, $this->header());
    }

}
