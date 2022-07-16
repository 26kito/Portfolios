<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Traits\cart as TraitsCart;
use App\Http\Controllers\Traits\header;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    use TraitsCart;

    // Menangkap dari komponen ProductsList
    public $listeners = ['addToCart' => 'addToCart'];

    public function mount() {
        
    }

    public function render() {
        return view('livewire.cart', [
            'cartQty' => $this->cart(),
        ]);
    }

    public function addToCart($id) {
        [ 'addToCart' => $this->TraitAddToCart($id) ];
    }
}
