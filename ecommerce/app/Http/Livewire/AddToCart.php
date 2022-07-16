<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddToCart extends Component
{
    public $data;
    public $users;
    public $babbb;
    
    public function mount()
    {
        
    }

    public function render()
    {
        // return view('livewire.add-to-cart', [
        //     'users' => User::get()
        // ]);
        // $this->users = User::get();
        $this->users = DB::table('users')
                        ->get();
        // dd($this->users);
        return view('livewire.add-to-cart');
    }

    public function hohoh()
    {
        $this->data = 'hola';
    }

    public function submit($id)
    {
        dd($id);
        $this->babbb = $id;
    }
}
