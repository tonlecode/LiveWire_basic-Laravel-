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
    public $userId;
    // public $isEditing ;



    public function render()
    {
        $this->users = User::get();
        return view('livewire.product-component');
    }


    public function createUser()
    {
        if($this->userId){
            $user = User::find($this->userId);
            $user->name = $this->name;
            $user->email = $this->email;
            if($this->password){
                $user->password = Hash::make($this->password);
            }
            $user->save();

            session()->flash('status', 'Update data successfully');
        }
        else{

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            session()->flash('status', 'Insert data successfully');
        }
        $this->reset(['name', 'email', 'password', 'userId']);
        }


public function edit($id)
{
    $this->isEditing = true;
    $this->userId = $id;
    $user = User::find($id);
    $this->name = $user->name;
    $this->email = $user->email;
}

public function delete($id)
{
    User::find($id)->delete();
    session()->flash('status', 'User deleted successfully');
}


}
