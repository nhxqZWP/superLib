<?php

namespace App\Service;

class OrderService
{
    public function placeOrder($platform = null, $price = null, $amountPercent = 1)
    {
        if (is_null($platform) || is_null($price)) {
            return null;
        }

    }
}