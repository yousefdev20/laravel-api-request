<?php

namespace Yousef\structure;

class Request
{
    protected array $header = [];
    protected array $body = [];

    protected static $instance = null;

    private function __construct()
    {
        //
    }

    public static function getInstance() : Request
    {
        if (self::$instance === null)
        {
            self::$instance = new Request();
        }
        return self::$instance;
    }

    public function setHeader(array $value) : void
    {
        $this->header[] = $value;
    }

    public function setBody(array $value) : void
    {
        $this->body[] = $value;
    }

    public function getHeader(string $key = null) : array
    {
        if ($key)
        {
            return $this->header[0][$key];
        }
        return $this->header;
    }

    public function getBody() : array
    {
        return $this->body;
    }

    public function unsetHeader() : void
    {
        $this->header = [];
    }

    public function unsetBody() : void
    {
        $this->body = [];
    }
}