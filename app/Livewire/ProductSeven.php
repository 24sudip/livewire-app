<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSeven extends Component
{
    public $name;
    public $variants = [
        ["name" => "", "price" => "", "sku" => ""]
    ];

    public function render()
    {
        return view('livewire.product-seven');
    }

    public function addVariant() {
        $this->variants[] = ["name" => "", "price" => "", "sku" => ""];
    }

    public function removeVariant($index) {
        unset($this->variants[$index]);
    }

    public function submit() {
        info($this->variants);
        $this->validate([
            'name'=>'required',
            'variants.*.name'=>'required',
            'variants.*.price'=>'required',
            'variants.*.sku'=>'required',
        ]);
        $product = Product::create([
            'name'=>$this->name
        ]);
        foreach ($this->variants as $variant) {
            $product->variants()->create($variant);
        }
        $this->variants = [
            ["name" => "", "price" => "", "sku" => ""]
        ];
        $this->name = "";
        session()->flash("success","Product Created");
    }
}

