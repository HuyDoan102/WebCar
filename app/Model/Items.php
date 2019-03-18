<?php

namespace App\Models\Cart;

class Items
{
    protected $product;

    protected $quantity = 1;

    /**
     * Food constructor.
     * @param \App\Product|mixed $product
     * @param $quantity
     */
    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        if ($quantity > VALUE_ZERO) {
            $this->quantity = $quantity;
        }
    }

    public function getUnitPrice()
    {
        return $this->product->price;
    }

    public function getTotalPrice()
    {
        return $this->getUnitPrice() * $this->getQuantity();
    }

    public function increaseWith($quantity)
    {
        $this->quantity += $quantity;
    }

    public function reduceWith($quantity)
    {
        $this->quantity -= $quantity;
    }
}