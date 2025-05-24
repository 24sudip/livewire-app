<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCreate extends Component
{
    public $category, $name, $price, $status, $vendors = [], $detail;

    public function render()
    {
        // info($this->name);
        return view('livewire.product-create');
    }

    public function resetForm() {
        $this->name = "";
        $this->price = "";
        $this->detail = "";
    }

    public function submitProduct() {
        info($this->name);
        // info($this->category);
        // info($this->price);
        // info($this->status);
        // info($this->vendors);
        // info($this->detail);

        // $this->validate([
        //     'name'=>'required',
        //     'price'=>'required|min:5|numeric',
        //     'detail'=>'required'
        // ]);
        // $product = Product::create([
        //     'name'=>$this->name,
        //     'price'=>$this->price,
        //     'detail'=>$this->detail
        // ]);
        
        // info($product);
    }
}

