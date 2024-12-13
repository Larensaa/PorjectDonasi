<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index() 
    {
        $categories = Category::get();
        $products = Product::with(['category'])->get();

        return view('pages.home', [
            'categories' => $categories,
            'products'    => $products
        ]);
    }
}
