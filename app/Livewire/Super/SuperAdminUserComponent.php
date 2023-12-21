<?php

namespace App\Livewire\Super;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class SuperAdminUserComponent extends Component
{
    use WithPagination;
    public function deleteUser($id){
        $user= User::find($id);
        $user->delete();
        session()->flash('metion','User was deleted sucessfully!');
    }
    public function render()
    {
        $users=User::paginate(5);
        return view('livewire.super.super-admin-user-component',['users'=>$users])->layout("livewire.layouts.base");
    }
}
