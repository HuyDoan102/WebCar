<?php

namespace App\Http\Controllers;

use App\Product;
use App\Model\Cart;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    protected $product;
    protected $total;

    public function getAddToCart($id)
    {
        $product = Product::find($id);

        $cart = session()->get('cart') ?? new Cart;
        $cart->addProduct($product, QUANTITY_TO_CART);

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = Session::get('cart');
        $totalPrice = $cart->getTotalPrice();

        return view('shop.shopping-cart', compact("cart", "totalPrice"));
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart_list') ? Session::get('cart_list') : null;

        $product = Product::find($id);

        return redirect()->route('carts.shoppingCart');
    }

    public function getIncreaseByOne($id)
    {
        $oldCart = Session::has('cart_list') ? Session::get('cart_list') : null;

        $food = $this->foodRepository->find($id);
        $store_id = $food->store->id;
        $cartOfStore = $oldCart->getCarts()[$store_id];
        $cartOfStore->addFood($food);

        return redirect()->route('carts.shoppingCart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $product = Product::find($id);
        $oldCart->removeFood($product);

        return redirect()->route('carts.shoppingCart');
    }
}
