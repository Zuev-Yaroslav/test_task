<?php

namespace App\HttpClients\DummyJson;

abstract class HttpClient
{
    private static ?self $instance = null;
    public static function make() : self
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
    private function __construct()
    {

    }
}
