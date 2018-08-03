<?php

namespace App\Service;

use App\Constants\ExamCardsConstant;
use Illuminate\Support\Facades\Log;

class RunService
{
     public function runOne(StrategyService $strategyService, OrderService $orderService)
     {
          $config = config('run');
          $getPlatform = $config['get_platform'];
          $getPlatformCoin = $config['get_platform_coin'];
          $trades = $config['do_trade'];

          // 获取交易触发
          $getOpe = $strategyService->StrategyOne($getPlatform, $getPlatformCoin);
          if (!is_null($getOpe)) { //下买单或卖单
             // 进行交易
             foreach ($trades as $plat => $coin) {
                  $orderService->placeNormalOrder($getOpe, $plat, $coin);
             }
          }

          return null;
     }
}