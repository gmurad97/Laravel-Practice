<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddCustomHeaderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Custom header for response
/*         $response = $next($request);
        $response->headers->set('Custom-Header', 'Value');
        return $response; */

        //check header or fail request

        //$request->headers->set("sprite","123");

        if ($request->headers->has('sprite')) {
            if ($request->headers->get("sprite") === "123") {
                return $next($request);
            } else {
                return response()->json(["sprite" => "incorrect"], 403);
            }
        } else {
            return response()->json(["sprite" => "not found"], 400);
        }



    }
}
