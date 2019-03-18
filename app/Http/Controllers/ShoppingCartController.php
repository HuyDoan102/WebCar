<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Models\Cart;

class ShoppingCartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAddToCart($id)
    {

    }
}
