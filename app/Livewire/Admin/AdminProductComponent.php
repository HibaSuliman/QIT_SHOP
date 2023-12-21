<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;


class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
        $product= Product::find($id);
        $product->delete();
        session()->flash('metion','Product was deleted sucessfully!');
    }

    public function render()
    {
       
        $products=Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout("livewire.layouts.base");
    }
}
