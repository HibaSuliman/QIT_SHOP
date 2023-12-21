<?php

namespace App\Livewire\Super;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class SuperAdminAddUserComponent extends Component
{
    use WithFileUploads;
    public $name,$email,$password,$role;

    public function storeUser(){
        $user= new User();
        $user->name = $this->name;
        $user->email= $this->email;
        $user->password = bcrypt($this->password);
        $user->email_verified_at = now();
        $user->assignRole($this->role);
        $user->save();session()->flash('metion','user was added sucessfully!');
        
    }
    public function render()
    {
        $roles= Role::all();
        return view('livewire.super.super-admin-add-user-component',['roles'=>$roles])->layout("livewire.layouts.base");
    }
}
