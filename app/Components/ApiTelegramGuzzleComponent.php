<?php

namespace App\Components;

use GuzzleHttp\Client;

class ApiTelegramGuzzleComponent
{
    /**
     * Create a new component instance.
     */
    public Client $telegramApi;
    public function __construct()
    {
        $this->telegramApi = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            "verify" => false,
            // You can set any number of default request options.
            'timeout' => 2.0,
        ]);
    }

    public function sendMessage()
    {
        $response = $this->telegramApi->post("https://api.telegram.org/bot1365289309:AAFeJ6o_X-pXjtsPgjqS1tDePNA7kdR96zuhY/sendMessage",[
            "chat_id" => "1269881154",
            "text" => "Кусь ^_^",
        ]);
        return json_decode($response->getBody(), true);
    }
}
