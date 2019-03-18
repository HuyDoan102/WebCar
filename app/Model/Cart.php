<?php

namespace App\Model;

use App\Product;

class Cart
{
    protected $items = [];

    public function addFood(Product $product, $quantity = QUANTITY_TO_CART)
    {
        if (array_key_exists($product->id, $this->items)) {
            $this->items[$product->id]->increaseWith($quantity);
        } else {
            $this->items[$product->id] = new Items($product, $quantity);
        }
    }
}
