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

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = Session::get('cart');

        $total = $cart->getTotalPrice();

        return view('shop.checkout', compact("total"));
    }

    public function postCheckout()
    {

    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cartProduct = $oldCart->getProducts()[$id];
        $cartProduct->reduceWith(QUANTITY_TO_CART);
        $product = Product::find($id);

        if ($cartProduct->getQuantity() > VALUE_ZERO) {
            Session::put('cart', $oldCart);
        } else {
            $oldCart->removeProduct($product);
            if (empty($oldCart->getProducts())) {
                Session::forget('cart');
            } else {
                Session::put('cart', $oldCart);
            }
        }

        return redirect()->route('carts.shoppingCart');
    }

    public function getIncreaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cartProduct = $oldCart->getProducts()[$id];
        $cartProduct->increaseWith(QUANTITY_TO_CART);
        Session::put('cart', $oldCart);

        return redirect()->route('carts.shoppingCart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $product = Product::find($id);
        $oldCart->removeProduct($product);

        return redirect()->route('carts.shoppingCart');
    }
}
