<?php

namespace App\Constants;

class ExamCardsConstant
{
    const CONFIG_ONE = [
        'get_platform' => 'binance',
        'get_platform_coin' => 'BTC/USDT',
        'do_trade' => [
            'binance' => [
                 'symbol' => 'BTC/USDT',
                 'key' => '',
                 'secret' => ''
            ],
//             'binance' => [
//                  'symbol' => 'BTC/USDT',
//                  'key' => env('binance2.key'),
//                  'secret' => env('binance2.secret')
//             ]
        ]
    ];
    
}