<?php
namespace Yousef\structure\facade;

/**
 * @method static \Yousef\structure\facade\ApiImplementation get(string $url = "", array $data = [])
 * @method static \Yousef\structure\facade\ApiImplementation post(string $url = "", array $data = [])
 * @method static \Yousef\structure\facade\ApiImplementation withToken(string $token = "")
 */
class Api extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return "Api";
    }
}