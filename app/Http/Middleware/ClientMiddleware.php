<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request->header());
        if(!$request->hasHeader('x-client')){  
            return response()->json([
                'success' => false,
                'message' => 'Please set X-Client header',
                'result' => null
            ], 401);  
        }
        $validClientKey = $request->header('x-client') == env('CLIENT_KEY');
        // dd($clientKey);
        if(!$validClientKey){  
            return response()->json([
                'success' => false,
                'message' => 'Wrong X-Client header',
                'result' => null
            ], 401);  
        }  
        return $next($request);
    }
}
