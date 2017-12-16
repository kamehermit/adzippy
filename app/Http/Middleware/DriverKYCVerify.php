<?php

namespace App\Http\Middleware;

use Closure;
use Response; 

class DriverKYCVerify
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
        $kyc = $request->user()->kyc;
        if(!$kyc){
            return Response::json([
                'status' => 'error',
                'status_code' => 401,
                'message' => 'KYC not complete.',
                'data' => ''
            ]);
        }
        return $next($request);
    }
}
