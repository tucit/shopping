<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // select * from category_products;
        $categories = CategoryProduct::all();

        $products = Product::all();

        return view('home',compact('categories','products'));
    }
}
