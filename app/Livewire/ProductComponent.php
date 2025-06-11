<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ProductComponent extends Component
{
        public $name;
    public $email;
    public $password;
    public $users;



    public function render()
    {
        $this->users = User::get();
        return view('livewire.product-component');
    }


    public function createUser()
    {
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        session()->flash('status', 'Insert data successfully');
    }

    //    public function listData(){

    //     $user = User::all();
    // }
}
