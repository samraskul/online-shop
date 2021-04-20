<?php

namespace App\Http\Livewire;

use App\Models\Admin\Product;
use Livewire\Component;

class ProductSearch extends Component
{
    // public $message = 'hi';
    public $products;
    public $search = '';

    public function render()
    {
        $this->products = Product::where('name', 'like', '%' . $this->search . '%')->pluck('name', 'id')->all();
        // dd($this->products);
        return view('livewire.product-search');
    }
}
