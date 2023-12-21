<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category= Category::find($id);
        $category->delete();
        session()->flash('metion','Category was deleted sucessfully!');
    }
    public function render()
    {
        

        $categories= Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout("livewire.layouts.base");
    }
}
