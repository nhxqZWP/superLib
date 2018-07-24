<?php

namespace App\Service;

use App\Constants\ExamCardsConstant;

class RunService
{
    public function runOne(StrategyService $strategyService, OrderService $orderService)
    {
        $config = ExamCardsConstant::CONFIG_ONE;
        $getPlatform = $config['get_platform'];
        $getPlatformCoin = $config['get_platform_coin'];
        $trades = $config['do_trade'];

        // 获取交易触发
        list($getCoin, $getPrice, $getAmount) = $strategyService->StrategyOne($getPlatform, $getPlatformCoin);

        // 进行交易
        foreach ($trades as $plat => $coin) {

        }
    }
}