<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Category, Product};

class ProductCreateTwo extends Component
{
    public $name, $price, $detail, $category, $isFeatured, $reason;

    public $categories = [];

    public $products = [];

    public function loadCategories() {
        // info('load Categories');
        $this->categories = Category::all();
    }

    public function mount() {
        // info('Call mount');
        $this->products = Product::latest()->get();
    }

    public function rendering() {
        info('rendering');
    }

    public function rendered() {
        info('rendered');
    }

    public function render()
    {
        // info("call render method");
        return view('livewire.product-create-two');
        // , [
        //     'products' => Product::latest()->get()
        // ]
    }

    public function submitProductTwo() {
        // info($this->name);
        // info($this->price);
        // info($this->detail);
        $this->validate([
            'name'=>'required',
            'price'=>'required',
            'detail'=>'required',
        ]);
        Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'detail'=>$this->detail
        ]);
        // $this->redirect('/products');
        $this->products = Product::latest()->get();
    }
}

