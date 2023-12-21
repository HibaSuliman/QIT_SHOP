<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;

class ShopComponent extends Component
{

    use WithPagination;
    public $sorting,$pageSize,$category,$price;

   

    public function render()
    {
    
        $products=Product::paginate(10);
        $categories= Category::all();
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout("livewire.layouts.base");
    }
}
