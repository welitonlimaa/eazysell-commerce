<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('agent.product', ['products'=>$products, 'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description',
            'price' => 'required|numeric',
            'url_img' => 'required',
            'category_id'  => 'nullable|exists:categories,id',
        ]);

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

    // public function edit(Product $product)
    // {
    //     return view('products.edit', compact('product'));
    // }

    // public function update(Request $request, Product $product)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required|numeric',
    //         'url_img' => 'required',
    //     ]);

    //     $product->update($data);

    //     return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    // }

    // public function destroy(Product $product)
    // {
    //     $product->delete();

    //     return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    // }
}
