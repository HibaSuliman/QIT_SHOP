<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
use Carbon\Carbon;


class AdminAddProductComponent extends Component
{

    use WithFileUploads;
    public $name,$image,$price,$category_id,$description;

    public function storeProduct(){
        $product= new Product();
        $product->name = $this->name;
        $product->price= $this->price;
        $product->description= $this->description;
        $product->category_id= $this->category_id;
        $imageName= Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image-> storeAs('products',$imageName);
        $product->image= $imageName;

        $product->save();
        session()->flash('metion','Product was added sucessfully!');
    }

    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout("livewire.layouts.base");
    }
}
