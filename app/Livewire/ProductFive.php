<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;

class ProductFive extends Component
{
    public $products = [];

    public function render()
    {
        $this->products = Product::latest()->get();
        return view('livewire.product-five');
    }

    public function productDelete($id) {
        $this->dispatch("confirm", id: $id);
        info($id);
    }

    #[On('deleteProduct')]
    public function deleteProduct($id) {
        // info($id);
        Product::find($id)->delete();
    }
}
