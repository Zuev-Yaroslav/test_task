<?php

namespace App\Console\Commands;

use App\HttpClients\DummyJson\HttpClientFactory;
use App\HttpClients\DummyJson\ProductHttpClient;
use App\HttpClients\DummyJson\UserHttpClient;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

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
        $users = UserHttpClient::make()->index();
        dd($users);
    }
}
