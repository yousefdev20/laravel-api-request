<?php
namespace YousefDev20\Api\app;

class StringConverter
{
    public static function buildQueryParameter(array $value = []) : String
    {
        return http_build_query($value);
    }
}