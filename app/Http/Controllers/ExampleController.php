<?php

namespace App\Http\Controllers;
use ccxt\bittrex;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function example()
    {
         $id = 'bittrex';
         $symbol = 'ETH/BTC';

// instantiate the exchange by id
         $exchange = '\\ccxt\\' . $id;
         $exchange = new $exchange (array (
              'enableRateLimit' => true,
         ));

// OHLCV format by default
         $ohlcv = $exchange->fetch_ohlcv ($symbol);
         print_r($ohlcv);
dd(1);
// convert OHLCV → TradingView
         $trading_view = $exchange->convert_ohlcv_to_trading_view ($ohlcv);
         return 'ok';
    }

    /**
     *  1. 某种策略  传参：哪个平台 哪种币 （精确到哪的图）
     *              返回：哪种币 下单类型 下单价格
     *  2. 下单 传参： 哪个平台 哪种币 下单价格 下单数量自定义
     *         返回：下单结果
     */




}
