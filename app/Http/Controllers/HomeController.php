<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        $allProducts = Product::with('category')->get();
        return view('index', compact('allCategories', 'allProducts'));
    }
}
