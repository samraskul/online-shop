<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;

class ProductList extends Component
{
    public $products;
    public $cardTitle;
    public $cardLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $cardTitle, $cardLink)
    {
        $this->products = $products;
        $this->cardTitle = $cardTitle;
        $this->cardLink = $cardLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.product-list');
    }
}
