<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddCategoryComponent extends Component
{
   use WithFileUploads;
   public $name,$image;

   public function storeCategory(){
    $category= new Category();
    $category->name = $this->name;
    $imageName= Carbon::now()->timestamp.'.'.$this->image->extension();
    $this->image-> storeAs('products',$imageName);
    $category->image= $imageName;
    $category->save();
    session()->flash('metion','Category was added sucessfully!');
}
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout("livewire.layouts.base");
    }

   
}
