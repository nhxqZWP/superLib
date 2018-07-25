<?php

return [
    'get_platform' => 'binance',
    'get_platform_coin' => 'BTC/USDT',
    'do_trade' => [
        'binance' => [
            'symbol' => 'BTC/USDT',
            'key' => env('binance_key'),
            'secret' => env('binance_secret')
        ]
    ]
];