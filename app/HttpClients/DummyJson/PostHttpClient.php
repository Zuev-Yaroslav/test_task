<?php

namespace App\HttpClients\DummyJson;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class PostHttpClient extends HttpClient
{
    private const ENTITY = 'posts';
    private const ENDPOINT_INDEX = '/posts';
    public function index() : Collection
    {
        return Http::dummy()->get(self::ENDPOINT_INDEX)->collect(self::ENTITY);
    }
    public function search(string $q) : Collection
    {
        return Http::dummy()->get(self::ENDPOINT_INDEX . '/search?q=' . $q)->collect(self::ENTITY);
    }
    public function store(array $data) : Collection
    {
        return Http::dummy()->post(self::ENDPOINT_INDEX . '/add', $data)->collect();
    }
}
