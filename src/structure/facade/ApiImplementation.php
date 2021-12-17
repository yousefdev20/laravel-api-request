<?php

namespace YousefDev20\Api\Structure\Facade;

use YousefDev20\Api\app\Request;
use YousefDev20\Api\Structure\Traits\hasToken;

class ApiImplementation
{
    use hasToken;

    protected Request|null $request = null;

    public function __construct()
    {
        $this->request = Request::getInstance();
    }

    public function get(string $url = "", array $value = [])
    {
        return $this;
    }

    public function post(string $url = "", array $value = [])
    {

    }

    public function put()
    {

    }

    public function delete()
    {

    }

}