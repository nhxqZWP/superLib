<?php

namespace App\Service;

class OrderService
{
    public function placeNormalOrder($ope = null, $platform = null, $symbol = null, $amountPercent = 1)
    {
        if (is_null($ope) || is_null($platform) || is_null($symbol)) {
            return null;
        }

    }

    public function placeMarketOrder($ope = null, $platform = null, $symbol = null)
    {
         if (is_null($ope) || is_null($platform) || is_null($symbol)) {
              return null;
         }

    }
}