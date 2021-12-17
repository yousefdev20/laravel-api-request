<?php
namespace yousefdev20\Api\Structure\Facade;

/**
 * @method static \YousefDev20\Api\Structure\Facade\ApiImplementation get(string $url = "", array $data = [])
 * @method static \YousefDev20\Api\Structure\Facade\ApiImplementation post(string $url = "", array $data = [])
 * @method static \YousefDev20\Api\Structure\Facade\ApiImplementation withToken(string $token = "")
 */
class Api extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return "Api";
    }
}