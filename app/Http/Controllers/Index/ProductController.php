<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke($productUrl)
    {
        $productId = getProductId($productUrl);
        $product = Product::find($productId);

        return view('index.single-product', compact('product'));
    }
}
