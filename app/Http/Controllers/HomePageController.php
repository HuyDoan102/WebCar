<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::all()->take(3);

        return view('homepage', compact("products"));
    }

    public function about()
    {
        return view('user.about');
    }

    public function specials()
    {
        return view('user.specials');
    }

    public function new()
    {
        return view('user.new');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
