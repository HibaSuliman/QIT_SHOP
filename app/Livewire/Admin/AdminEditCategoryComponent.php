<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $name,$image,$newimage,$category_id;

    public function mount($category_id){
        $category = Category::where('id',$category_id)->first();
        $this->name = $category->name;
        $this->image= $category->image;
        $this->category_id= $category->id;
    }

    public function updatCategory(){
        $category= Category::find($this->category_id);
        $category->name = $this->name;
        if($this->newimage){
            $imageName= Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage-> storeAs('products',$imageName);
            $category->image= $imageName;
        }
        $category->save();
        session()->flash('metion','Category was updated sucessfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout("livewire.layouts.base");
    }


    

    

}
