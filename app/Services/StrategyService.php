<?php

namespace App\Service;

class StrategyService
{
     //只返回买卖操作
     public function StrategyOne($platform = 'binance', $symbol = 'BTC/USDT')
     {

          //return no ope
          return null;
     }
}