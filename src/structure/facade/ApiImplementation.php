<?php

namespace Yousef\Structure\Facade;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use YousefDev20\Api\app\Request;
use YousefDev20\Api\app\StringConverter;
use YousefDev20\Api\Structure\Traits\hasToken;

class ApiImplementation
{
    use hasToken;

    protected Request|null $request = null;

    public function __construct()
    {
        $this->request = Request::getInstance();
    }

    public function get(string $url = "", array $value = []) : Object
    {
        $request = Request::getInstance();
        $request->setBody($value);
        $queryParameters = StringConverter::buildQueryParameter($request->getBody());

        return Http::withToken($request->getHeader('token'))
            ->get(Config::get('api.BASE_URL') . $url . $queryParameters);
    }

    public function post(string $url = "", array $value = []) : Object
    {
        return Http::withToken(Request::getInstance()->getHeader('token'))
            ->get(Config::get('api.BASE_URL') . $url);
    }

    public function put()
    {

    }

    public function delete()
    {

    }

}