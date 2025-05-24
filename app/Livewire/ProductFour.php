<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Product, Category};

class ProductFour extends Component
{
    public $name, $price, $detail, $publish_date, $category_id;

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.product-four');
    }

    public function submitProduct() {
        // info();
        $this->validate([
            'category_id'=>'required',
            'name'=>'required',
            'price'=>'required|min:5|numeric',
            'detail'=>'required'
        ]);
        $product = Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'detail'=>$this->detail,
            // 'category_id'=>$this->category_id,
            'publish_date'=>$this->publish_date
        ]);
        foreach ($this->category_id as $cat_id) {
            $product->categories()->attach($cat_id);
        }
        info($product);
    }
}

