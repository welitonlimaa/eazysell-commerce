<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('home', ['products'=>$products, 'categories'=>$categories]);
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {   
        $status = false; 
        return view('user.checkout', ['status'=>$status]);
    }
}
