<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CustomOverideException extends Exception
{
    /**
     * Report the exception.
     */
    public function report(): void
    {
        Log::error("error_message", ["context1" => "type1"]);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render(Request $request): Response
    {
        return new Response(["success" => "false", "_exception_type" => "custom_overide_exception_type"],418);
        //418 error - I'am teapot :D
    }
}
