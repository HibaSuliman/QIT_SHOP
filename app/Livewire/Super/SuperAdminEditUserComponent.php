<?php

namespace App\Livewire\Super;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\User;

class SuperAdminEditUserComponent extends Component
{
    public $name,$email,$role,$user_id,$password;


    public function mount($user_id){
        $user = User::where('id',$user_id)->first();
        $this->name = $user->name;
        $this->email= $user->email;
        $this->password = $user->password;
        if($user->hasRole('SuperAdmin')){
            $this->role = 'SuperAdmin';
        }
        else if($user->hasRole('Admin')){
            $this->role = 'Admin';
        }
        else{
            $this->role = 'user';
        }
        $this->user_id= $user->id;
    }


    public function updateUser(){
        $user= User::find($this->user_id);
        $user->name = $this->name;
        $user->email= $this->email;
        $user->password = bcrypt($this->password);
        $user->email_verified_at = now();
        DB::table('model_has_roles')->where('model_id',$this->user_id)->delete();
        $user->assignRole($this->role);
        $user->save();
        session()->flash('metion','user was uptated sucessfully!');
    }
    public function render()
    {
        $roles= Role::all();
        return view('livewire.super.super-admin-edit-user-component',['roles'=>$roles])->layout("livewire.layouts.base");
    }
}
