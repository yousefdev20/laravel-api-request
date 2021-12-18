<?php
namespace Yousef;

class StringConverter
{
    public static function buildQueryParameter(array $value = []) : String
    {
        return http_build_query($value);
    }
}