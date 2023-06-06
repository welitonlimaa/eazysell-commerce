<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('agent.category', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('agent.category');
    }

    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->route('agent.category');
    }
}
