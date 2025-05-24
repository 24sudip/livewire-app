<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductThree extends Component
{
    public $products = [];

    public function mount() {
        sleep(3);
        $this->products = Product::all();
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.product-three');
    }
}

