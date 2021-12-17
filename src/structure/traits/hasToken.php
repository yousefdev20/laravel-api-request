<?php

namespace YousefDev20\Api\Structure\Traits;

use YousefDev20\Api\app\Request;
use YousefDev20\Api\Structure\Facade\ApiImplementation;

trait hasToken
{
    public function withToken(string $token = "") : Object
    {
        Request::getInstance()->setHeader(["token" => $token]);
        return $this;
    }

}