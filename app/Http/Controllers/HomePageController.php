<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);

        return view('homepage', compact("products"));
    }
}
