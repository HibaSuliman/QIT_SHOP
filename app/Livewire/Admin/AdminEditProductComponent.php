<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name,$image,$newimage,$price,$product_id,$category_id,$description;

    public function mount($product_id){
        $product = Product::where('id',$product_id)->first();
        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
        $this->image= $product->image;
        $this->product_id= $product->id;
    }

    public function updateProduct(){
        $product= Product::find($this->product_id);
        $product->name = $this->name;
        $product->price= $this->price;
        $product->description= $this->description;
        $product->category_id= $this->category_id;
        if($this->newimage){
            $imageName= Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage-> storeAs('products',$imageName);
            $product->image= $imageName;
        }
        $product->save();
        session()->flash('metion','Product was Updated sucessfully!');
    }

    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout("livewire.layouts.base");
    }
}
