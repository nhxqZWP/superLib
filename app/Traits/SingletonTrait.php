<?php
/**
 * Created by PhpStorm.
 * User: a17
 * Date: 2018/7/24
 * Time: 下午4:35
 */

namespace App\Traits;


trait SingletonTrait
{
    protected static $_instance = null;

    protected function __construct()
    {
        $ref = new \ReflectionClass(static::class);
        if ($ref->hasMethod('init')) {
            $this->init();
        }
    }

    public static function instance()
    {
        if (self::$_instance === null) {
            self::$_instance = new static();
        }
        return self::$_instance;
    }
}