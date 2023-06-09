<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('home', ['products'=>$products, 'categories'=>$categories]);
    }
}
