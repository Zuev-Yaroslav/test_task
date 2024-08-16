<?php

namespace App\Console\Commands\DummyJson\Product;

use App\HttpClients\DummyJson\ProductHttpClient;
use App\Models\Product;
use Illuminate\Console\Command;

class StoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:store';

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
        $data = [
            'title' => 'Samsung Galaxy'
        ];
        $product = ProductHttpClient::make()->store($data);
        Product::firstOrCreate(['data' => json_encode($product)]);
    }
}
