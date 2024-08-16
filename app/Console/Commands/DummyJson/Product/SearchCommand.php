<?php

namespace App\Console\Commands\DummyJson\Product;

use App\HttpClients\DummyJson\ProductHttpClient;
use App\Models\Product;
use Illuminate\Console\Command;

class SearchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:search';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = ProductHttpClient::make()->search('iPhone');
        $products->each(function ($product) {
            Product::firstOrCreate(['data' => json_encode($product)]);
        });

    }
}
