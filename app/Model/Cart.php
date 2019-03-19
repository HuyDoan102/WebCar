<?php

namespace App\Model;

use App\Product;

class Cart
{
    protected $items = [];
    protected $totalPrice = 0;

    public function addProduct($product, $quantity = QUANTITY_TO_CART)
    {
        if (array_key_exists($product->id, $this->items)) {
            $this->items[$product->id]->increaseWith($quantity);
        } else {
            $this->items[$product->id] = new Items($product, $quantity);
        }
    }

    public function getProducts()
    {
        return $this->items;
    }

    public function getTotalPrice()
    {
        $this->totalPrice = VALUE_ZERO;

        foreach ($this->items as $cart) {
            $this->totalPrice += $cart->getTotalPrice();
        }

        return $this->totalPrice;
    }

    public function getTotalQuantity()
    {
        $totalQuantity = VALUE_ZERO;

        foreach ($this->items as $product) {
            $totalQuantity += $product->getQuantity();
        }

        return $totalQuantity;
    }

    public function removeFood($product)
    {
        if (array_key_exists($product->id, $this->items)) {
            unset($this->items[$product->id]);
        }
    }
}
