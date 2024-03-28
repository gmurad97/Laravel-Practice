<?php

namespace App\Console\Commands;

use App\Components\ApiTelegramGuzzleComponent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TelegramApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:telegram {arg}';

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
        //$this->argument();
        //$this->option('');
        $arg = $this->argument("arg");
        switch ($arg) {
            case "send":
                $this->sendMessage();
                break;
            case "get":
                $this->getMessage();
                break;

            case "curl":
                $this->curl_php_request();
                break;
        }
    }
    private function curl_php_request()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://jsonplaceholder.typicode.com/todos/1");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($curl);
        curl_close($curl);

        $this->info($response);
    }

    private function sendMessage()
    {
        $token = "1365289309:AAFeJ6o_X-pXjtsPgjqS1tDePNA7kdR96zuhY";
        $chatId = "1269881154";
        $message = "Кусь ^_^";

        //guzzle http request from components
        /* $client = new ApiTelegramGuzzleComponent();
        $client->sendMessage(); */

        //use Laravel HTTP method for send request
        $response = Http::withOptions([
            "verify" => false,
        ])->post("https://api.telegram.org/bot{$token}/sendMessage", [
                    "chat_id" => $chatId,
                    "text" => $message,
                ]);
        if ($response->json()["ok"]) {
            $this->info("Success.Message Successefully sended. token:{$token} chatId:{$chatId}");
        } else {
            $this->error("Error.Message not sended. token:{$token} chatId:{$chatId}");
        }
    }

    private function getMessage()
    {
        $token = "1365289309:AAFeJ6o_X-pXjtsPgjqS1tDePNA7kdR96zuhY";
        $chatId = "1269881154";

        $response = Http::withOptions([
            "verify" => false,
        ])->get("https://api.telegram.org/bot{$token}/getUpdates");
        if ($response->json()["ok"]) {
            foreach ($response->json()["result"] as $message) {
                $this->warn($message["message"]["from"]["username"] . "\t" . $message["message"]["text"]);
            }
        } else {
            $this->error("Error.Message not sended. token:{$token} chatId:{$chatId}");
        }
    }
}
