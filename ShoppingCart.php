<?php
class ShoppingCart {
    private $products = [];

    public function addProduct($product, $quantity) {
        if (isset($this->products[$product])) {
            $this->products[$product] += $quantity;
        } else {
            $this->products[$product] = $quantity;
        }
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->products as $product => $quantity) {
            $total += $product->price * $quantity;
        }
        return $total;
   
