<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;

class CategoryFilterComponent extends Component
{
    use WithPagination;
    public $sorting,$pageSize,$category,$price;

    public function mount($category_id){
     $cat =   Product::where('category_id',$category_id)->first();
     if(is_null($cat)){
        $this->category = null;
     }else
        $this->category = $cat->category_id;
    }
    public function render()
    {

        if($this->category){
        $products=Product::where('category_id',$this->category)->paginate(10);
        
        }else{
            session()->flash('metion','No products in this category!');
            $products=Product::paginate(10);
        }
        $categories= Category::all();

        return view('livewire.category-filter-component',['products'=>$products,'categories'=>$categories])->layout("livewire.layouts.base");
    }
}
