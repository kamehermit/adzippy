<?php

namespace App\Http\Middleware;

use Closure;
use Response; 

class DriverKYC
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $flag = $request->user()->kyc;
        if($flag){
            return Response::json([
                'status' => 'error',
                'status_code' => 401,
                'message' => 'method not allowed',
                'data' => ''
            ]);
        }
        return $next($request);
    }
}
