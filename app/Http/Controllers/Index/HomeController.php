<?php

namespace App\Http\Controllers\Index;

use App\Models\Admin\Post;
use App\Models\Admin\Image;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return view();
     */
    public function __invoke()
    {
        $categories = Category::where('type', 'product')->get()->pluck('name', 'id');
        $mostViewProducts = Product::orderBy('views', 'desc')->limit(15)->get(['id','name', 'price', 'discount']);//['name', 'price', 'discount']
        $recentPosts = Post::orderBy('created_at', 'desc')->limit(10)->pluck('title', 'id');
        // foreach ($mostViewProducts as $mostViewProduct) {
        //     dd($mostViewProduct);
        // }
        // $image = Image::find(2);
        // $imageable = $image->imageable;
        // dd($imageable);
        // $product = Product::find(1);
        // dd($product->images);
        
        return view('index.home', compact('categories', 'mostViewProducts', 'recentPosts'));
    }
}
