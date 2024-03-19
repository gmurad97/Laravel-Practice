<?php

namespace App\Console\Commands;

use App\Components\HttpClientGuzzle;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class HttpClientGuzzleCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'guzzle:test';

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
        //GUZZLE
/*         $httpClient = new HttpClientGuzzle();
        $response = $httpClient->client->get('posts');
        $contents = $response->getBody()->getContents();
        dd($contents); */

        //HTTP LARAVEL - GUZZLE LIB
        /* dd(json_decode(Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/posts')->body())); */
    }
}
