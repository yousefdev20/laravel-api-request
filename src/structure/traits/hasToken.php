<?php

namespace Yousef\structure\traits;

use Yousef\structure\Request;

trait hasToken
{
    public function withToken(string $token = "") : Object
    {
        Request::getInstance()->setHeader(["token" => $token]);
        return $this;
    }

}