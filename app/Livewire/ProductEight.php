<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;

class ProductEight extends Component
{
    public $products = [];

    public function render()
    {
        $this->products = Product::latest()->get();
        return view('livewire.product-eight');
    }

    public function productDelete($id) {
        $this->dispatch("confirm", id: $id);
    }

    #[On('delete')]
    public function delete($id) {
        Product::find($id)->delete();
    }
}
